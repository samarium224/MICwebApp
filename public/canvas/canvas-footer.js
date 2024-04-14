let footerCanvas = document.querySelector(".footer-canvas");
let footerParent = document.querySelector("footer");

footerCanvas.width = footerParent.clientWidth;
footerCanvas.height = footerParent.clientHeight;

let ctx = footerCanvas.getContext("2d");

const modifier = map(innerWidth, 288, 1920, 0.3, 1);

function Circle(x, y, radius) {
  this.x = x;
  this.y = y;
  this.speed = randomNum(1, 3) * modifier;
  this.rad = randomNum(0, Math.PI * 2);
  this.radius = radius * modifier;
  this.alpha = 0.6;

  this.draw = (alpha) => {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
    ctx.fillStyle = `rgba(255, 255, 255, ${alpha})`;
    ctx.fill();
    ctx.closePath();
  };

  this.update = () => {
    this.x += this.speed * 2;
    this.y += this.speed * Math.sin(this.rad);
    this.rad += (Math.PI * this.speed) / 100;
    this.alpha -= 0.002 * modifier;
    this.radius -= 0.01 * modifier;

    this.draw(this.alpha);
  };
}

let circles = [];
let frame = 0;

function animatefooter() {
  ctx.clearRect(0, 0, footerCanvas.width, footerCanvas.height);

  circles.forEach((circle, i) => {
    circle.update();
    if (circle.radius < 0.01 || circle.alpha < 0) circles.splice(i, 1);
  });

  frame += 1;
  if (frame > 9)
    circles.push(
      new Circle(-10, randomNum(0, footerCanvas.height), randomNum(3, 5))
    ),
      (frame = 0);

  requestAnimationFrame(animatefooter);
}

animatefooter();
