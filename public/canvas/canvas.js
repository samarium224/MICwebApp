let headerCanvas = document.querySelector(".header-canvas");
let headerParent = document.querySelector(".header");

let windowHeight = headerParent.clientHeight + innerWidth * 0.055;
let windowWidth = headerParent.clientWidth;

headerCanvas.width = windowWidth;
headerCanvas.height = windowHeight;

let c = headerCanvas.getContext("2d");

//utility functions
function detectCollision(x1, x2, y1, y2, radius1, radius2) {
  let distance = Math.pow(x1 - x2, 2) + Math.pow(y1 - y2, 2);
  let collisionDistance = Math.pow(radius1 + radius2, 2);
  return distance <= collisionDistance;
}

function map(value, low1, high1, low2, high2) {
  return low2 + ((high2 - low2) * (value - low1)) / (high1 - low1);
}

function randomNum(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.random() * (max - min) + min;
}

const connecting_distance = 150;

//circle constructor
function Circle(x, y, radius, color) {
  this.x = x;
  this.y = y;
  const dx = randomNum(-1, 1);
  const rand = Math.floor(randomNum(0, 2));
  this.velocity = {
    x: dx,
    y: Math.pow(1 - Math.pow(dx, 2), 0.5),
  };
  this.radius = radius;
  this.color = color;
  if (rand == 0) this.velocity.y *= -1;

  //draw the circle
  this.draw = () => {
    c.beginPath();
    c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
    c.fillStyle = this.color;
    c.fill();
    c.closePath();
  };

  //update the circle
  this.update = () => {
    this.draw();

    //detect collison
    for (let i = 0; i < particles.length; i++) {
      if (this == particles[i]) continue;
      if (
        detectCollision(
          this.x,
          particles[i].x,
          this.y,
          particles[i].y,
          connecting_distance,
          connecting_distance
        )
      ) {
        const dist = Math.pow(
          Math.pow(this.x - particles[i].x, 2) +
            Math.pow(this.y - particles[i].y, 2),
          0.5
        );
        c.beginPath();
        c.strokeStyle = `rgba(171, 178, 185, ${map(
          dist,
          30,
          connecting_distance,
          0.5,
          0
        )})`;
        c.moveTo(this.x, this.y);
        c.lineTo(particles[i].x, particles[i].y);
        c.stroke();
        c.closePath();
      }
    }

    //keep particles in the screen
    if (
      this.x + this.radius > windowWidth + connecting_distance ||
      this.x - this.radius < -connecting_distance
    ) {
      this.velocity.x = -this.velocity.x;
    }
    if (
      this.y + this.radius > windowHeight + connecting_distance ||
      this.y - this.radius < -connecting_distance
    ) {
      this.velocity.y = -this.velocity.y;
    }

    //add velocity
    this.x += this.velocity.x;
    this.y += this.velocity.y;
  };
}

//create circles
let particles = [];
const max_particles = map(windowWidth, 280, 1920, 35, 150);
for (i = 0; i < max_particles; i++) {
  let radius = 1;
  let x = randomNum(
    radius - connecting_distance,
    windowWidth - radius + connecting_distance
  );
  let y = randomNum(
    radius - connecting_distance,
    windowHeight - radius + connecting_distance
  );
  let color = "rgba(171, 178, 185, 0.7)";

  let particle = new Circle(x, y, radius, color);
  particles.push(particle);
}

//ANIMATE
function animate() {
  c.clearRect(0, 0, windowWidth, windowHeight);

  particles.forEach((particle) => {
    particle.update();
  });

  requestAnimationFrame(animate);
}

animate();
