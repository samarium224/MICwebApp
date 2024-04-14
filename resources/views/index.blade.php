<!DOCTYPE html>
<html lang="en">
<!-- MIC club project:: this webside was created by samir fazal and tahmid zaman raad -->
{{-- MIC laravel project:: this is further improved by samir fazal --}}
@include('base')

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1" />
    <title>MIC Registration Form</title>
    <link rel="shortcut icon" href="{{ asset('img/darklogo.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />

    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.2.2/dist/kute.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet" />
    <style>
        @media(max-width: 800px) {
            .flex-container {
                padding-top: 60px;
            }
        }
    </style>
</head>

<body>
    <section class="header">
        <canvas class="header-canvas"></canvas>
        <div class="flex-container">
            <div>
                <h1 class="mobile_heading">
                    Become A Member of<br />
                    The Most Active Club<br />of MIST
                </h1>
                <p class="jointext">Join us by filling up the form</p>
            </div>
            <div>
                <div class="dflex">
                    <img class="contain_img" src="{{ asset('img/darklogo.png') }}" alt="miclogo" />
                    <div class="logodowntext">
                        <h1 class="motologomic">
                            MIST<br />
                            Innovation Club
                        </h1>
                        <p class="its">INNOVATE TO SERVE</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="split-left">
      <div class="centered">
        <div class="htextleft">
          <h1 class="mobile_heading">
            Become An Associate Member of<br />
            The Most Active Club<br />of MIST
          </h1>
          <p class="jointext">Join us by filling up the form</p>
        </div>
      </div>
    </div>

    <div class="split-right">
      <div class="centered">
        <img src="img/darklogo.png" alt="miclogo" />
        <div class="logodowntext">
          <h1>
            Mist<br />
            Innovation Club
          </h1>
          <p class="its">INNOVATE TO SERVE</p>
        </div>
      </div>
    </div> -->
        <!-- button -->
        <div class="scrolldwnbtn">
            <a aria-label="Scroll Down ⇣" class="h-button centered" data-text="Start" href="#start">
                <span>S</span>
                <span>c</span>
                <span>r</span>
                <span>o</span>
                <span>l</span>
                <span>l</span>
                <span></span>
                <span>D</span>
                <span>o</span>
                <span>w</span>
                <span>n</span>
                <span></span>
                <span>⇣</span>
            </a>
        </div>
    </section>
    <div class="spacer dheww1"></div>
    <section class="dark">
        <div class="about-us">
            <div class="left-col">
                <h1>What we do?</h1>
            </div>
            <div class="right-col">
                <p>
                    We promote and engage individuals towards Innovation, boosting them
                    in this section both physically and psychologically and provide
                    skill development opportunities.
                </p>
            </div>
        </div>

        <div>
            <br><br><br>
            <h1 class="deptheadingtext">Our Departments</h1>
            <div class="dept-text">
                <div class="dept-text-right">
                    <div>
                        <h3>Industrial Collaboration & HR</h3>
                        <hr />
                        <p>
                            We are in charge of managing collaboration with other club and
                            partnering with them. We gather and keep data of vital
                            information of our club.
                        </p>
                    </div>
                    <div>
                        <h3>Creative Design</h3>
                        <hr />
                        <p>
                            Basically we de any kind of design for this club. From digital
                            to printing items like posters, banners etc all are done by this
                            team and also co operate with other teams.
                        </p>
                    </div>
                    <div>
                        <h3>Video Editing</h3>
                        <hr>
                        <p>
                            Though it is a very demandable department but the manpower is
                            too short. With this team we are going forward.We prepare videos
                            for different activities of the club and thus contribute to it
                        </p>
                    </div>
                    <div>
                        <h3>Machine learning & micro-controller</h3>
                        <hr>
                        <p>
                            Innovation the name itself describe our work in this club.Extremely Motivated and willing to
                            learn all the
                            new aspects of AI and contribute to both the club and global knowledge with help of it and
                            We also try to
                            find innovative ideas and try to make them reality with the help of amazing micro elements.
                        </p>
                    </div>
                </div>
                <div class="dept-text-left">
                    <div>
                        <h3>Organizing</h3>
                        <hr />
                        <p>
                            MIC organising teams work with the flow of time. Recently, we
                            have taken the interviews of the associate members which was
                            done successfully. We have given ideas about a new event and how
                            to organise accurately.
                        </p>
                    </div>
                    <div>
                        <h3>Soft Skills</h3>
                        <hr />
                        <p>
                            Soft Skills improve employability,adaptability which ensures
                            survival at the modern workplace even in high-tech environments
                            and also allow our hard skills to shine
                        </p>
                    </div>
                    <div>
                        <h3>Marketing</h3>
                        <hr />
                        <p>
                            "Words are powerful. We the Marketing team play with words to
                            uphold the Club's stature. We are here to communicate in the
                            most effective way. We network, talk, and convince people for
                            the collective purpose of the club."
                        </p>
                    </div>
                    <div>
                        <h3>App & Web Development</h3>
                        <hr />
                        <p>
                            MIC App and Web Development department develops and maintains
                            apps, websites and chatbots. This department also offers various
                            technical courses related to programming languages, app and web
                            development.
                        </p>
                    </div>
                </div>
            </div>
            <svg width="320" height="820" viewBox="0 0 358 1021" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="dept-list-tree" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M179.001 136C179.001 206.711 179.001 206.711 249.712 206.711" stroke="white"
                    stroke-width="3" />
                <path d="M179.001 351C179.001 421.711 179.001 421.711 249.712 421.711" stroke="white"
                    stroke-width="3" />
                <path d="M179.001 570C179.001 640.711 179.001 640.711 249.712 640.711" stroke="white"
                    stroke-width="3" />
                <path d="M179.001 789C179.001 859.711 179.001 859.711 249.712 859.711" stroke="white"
                    stroke-width="3" />
                <path d="M107.999 332.711C178.71 332.71 178.71 332.711 178.71 262" stroke="white" stroke-width="3" />
                <path d="M107.999 547.711C178.71 547.71 178.71 547.711 178.71 477" stroke="white" stroke-width="3" />
                <path d="M107.999 766.711C178.71 766.71 178.71 766.711 178.71 696" stroke="white" stroke-width="3" />
                <path d="M107.999 985.711C178.71 985.71 178.71 985.711 178.71 915" stroke="white" stroke-width="3" />
                <path
                    d="M45 373C69.8528 373 90 352.853 90 328C90 303.147 69.8528 283 45 283C20.1472 283 0 303.147 0 328C0 352.853 20.1472 373 45 373Z"
                    fill="#798088" />
                <path
                    d="M45 589C69.8528 589 90 568.853 90 544C90 519.147 69.8528 499 45 499C20.1472 499 0 519.147 0 544C0 568.853 20.1472 589 45 589Z"
                    fill="#798088" />
                <path
                    d="M45 1021C69.8528 1021 90 1000.85 90 976C90 951.147 69.8528 931 45 931C20.1472 931 0 951.147 0 976C0 1000.85 20.1472 1021 45 1021Z"
                    fill="#798088" />
                <path d="M77 944H13V1008H77V944Z" fill="url(#pattern0)" />
                <path
                    d="M313 905C337.853 905 358 884.853 358 860C358 835.147 337.853 815 313 815C288.147 815 268 835.147 268 860C268 884.853 288.147 905 313 905Z"
                    fill="#798088" />
                <path
                    d="M45 805C69.8528 805 90 784.853 90 760C90 735.147 69.8528 715 45 715C20.1472 715 0 735.147 0 760C0 784.853 20.1472 805 45 805Z"
                    fill="#798088" />
                <path
                    d="M313 250C288.147 250 268 229.853 268 205C268 180.147 288.147 160 313 160C337.853 160 358 180.147 358 205C358 229.853 337.853 250 313 250Z"
                    fill="#798088" />
                <path
                    d="M313 466C288.147 466 268 445.853 268 421C268 396.147 288.147 376 313 376C337.853 376 358 396.147 358 421C358 445.853 337.853 466 313 466Z"
                    fill="#798088" />
                <path d="M345 389H281V453H345V389Z" fill="url(#pattern1)" />
                <path
                    d="M313 682C288.147 682 268 661.853 268 637C268 612.147 288.147 592 313 592C337.853 592 358 612.147 358 637C358 661.853 337.853 682 313 682Z"
                    fill="#798088" />
                <path d="M338 612H288V662H338V612Z" fill="url(#pattern2)" />
                <path d="M179 102V950" stroke="white" stroke-width="3" />
                <path
                    d="M179 120C212.137 120 239 93.1371 239 60C239 26.8629 212.137 0 179 0C145.863 0 119 26.8629 119 60C119 93.1371 145.863 120 179 120Z"
                    fill="white" />
                <path d="M77 512H13V576H77V512Z" fill="url(#pattern3)" />
                <path d="M229 10H129V110H229V10Z" fill="url(#pattern4)" />
                <path d="M345 828H281V892H345V828Z" fill="url(#pattern5)" />
                <path d="M72 732H17V787H72V732Z" fill="url(#pattern6)" />
                <path d="M345 173H281V237H345V173Z" fill="url(#pattern7)" />
                <path d="M77 296H13V360H77V296Z" fill="url(#pattern8)" />
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_0_1" transform="scale(0.01)" />
                    </pattern>
                    <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image1_0_1" transform="scale(0.01)" />
                    </pattern>
                    <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image2_0_1" transform="scale(0.015625)" />
                    </pattern>
                    <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image3_0_1" transform="scale(0.015625)" />
                    </pattern>
                    <pattern id="pattern4" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image4_0_1" transform="scale(0.01)" />
                    </pattern>
                    <pattern id="pattern5" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image5_0_1" transform="scale(0.015625)" />
                    </pattern>
                    <pattern id="pattern6" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image6_0_1" transform="scale(0.01)" />
                    </pattern>
                    <pattern id="pattern7" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image7_0_1" transform="scale(0.015625)" />
                    </pattern>
                    <pattern id="pattern8" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image8_0_1" transform="scale(0.02)" />
                    </pattern>
                    <image id="image0_0_1" width="100" height="100"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABmJLR0QA/wD/AP+gvaeTAAAC4UlEQVR4nO2du24TQRhGTyLiJhYvQkGSgstLQIhQGngfbhW3JyDyy0ANIUDHpccuSJNQTCLMrAXrnX/sb+3vSFts8/mfPZqd9Y52BowxxhhjTDwbyy7gH5xXzpds++ayCzB/YyFiWIgYV5ZdwByU3vNrj0khuIeIYSFiWIgY0UIGwCEwAo6BCene3eVYNG3rmpDaNiK1dbCEWltxAHyhu4Dagv6X17Wuz8C9gPrC2ASeUk+EupDL4wkiQ8Az6svog5Bz4HFAnUUc0CzqF/ACuAlsF2QvWkhbtkltewmczsjdLyuzOwOaY8ZX4HpQvqqQaXZIbZ7O/QRsBeXPxSHNnhElA/ohBGCXZk+5H5jfmlFWxPPg/L4IAXiVZR8F57fiY1bEjeB89YeEaW5l2cfB+a0YZ0UMg/P7JGSYZY+7BpW8Qc0bFT0DF33RcmrX2ylf4o+M+YPyfIjknHdt3EPEsBAxLEQMCxHDQsSwEDEsRAwLEcNCxLAQMSxEDAsRw0LEmPVGtW/zELVZ6PVwDxHDQsSwEDHazBiuxZdLc1D1eriHiGEhYliIGBYihoWIYSFiWIgYFiKGhYhhIWJYiBht3mWt2ruoUqpeD/cQMSxEDAsxxhhjVgTl79T7hr9TX0UsRAwLEcNCxLAQMSxEDAsRw0LEsBAxlNfLWssvudxDxCgRMsnOoxfB7BNXs/OfXYNKhHzPzq8VZPWdvO0/ugaVCHmXnT8oyGrDRuFRk4fZ+dvKvzeTWUuN7wTm92Vl6z1ElhofkDYzyRfj3w3K74OQPeBblnvCkhbjh7SzTN7QU9Ja6LcpG+hVhQxJbXtNs2ecAXfKyixnEbvrLEJIRI2PAuosZpO03c86Czkj7a4j9b9un7SZyboJOQHuBtRXhS3SE8YR8IHmDgqrIGQMvAfeXLQ1dACXfJ9zQX7RoldQkGy71D3PWIgcFiKG8nxITsTALo97iBgWIoaFGGOMMcaYNeA3RvQlUGCkvh4AAAAASUVORK5CYII=" />
                    <image id="image1_0_1" width="100" height="100"
                        xlink:href="data:image/png;base64,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" />
                    <image id="image2_0_1" width="64" height="64"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAADaUlEQVR4nO2bu2sVQRTGf7u5IT6CYmsbDCKx1SJ2phRbNblWGpAoWASxsAliZ6L4SqLBFzFB/4fYKWhh56MwAbFIfIGCIMQisZhdODvuZjbZ3ZnN7v1gYOfM7Jzzfczrzs71+B/bgT6gC2iPKd+M+AssAHPAn6RKHnAB+AWsVjT9BIYDrhH4wGwJArSVZkIRGoEAw8AJIcgC8DxQrArYBRxGDWuAfuANcA3UmJfdfgrosB9j4egA7hMdDtsAjgrjR6pJPkQHqneHfI/4QLeoMAcsOwjMFpZRHEN0N4BOYfiqveADA8DuIL+ImkBWUpaXEUvieUcjsZpCE3gcY59OWV56+IbyVYPNVF56mHrADIpQT5B/i9ovpC0vPUwCrABPMpSXHqYhUHnUXgB9CPQCF10EYhG9MqML0Bek2qA1BLT8S+CFi0As4hBiGOgCzAEjVsOxjxGEAHUcAgvied60Eaoiwt0rwGwdBYjsXus4BCJoCeA6ANdoCeA6ANdoCeA6ANeovQBV2gjpR/QmLAIzVRIg6Yh+TVRpCGzkOL6rSj1AP6KX8IBB1FfiCKokQNIRvQfcJoY8VGsIxMED7gJDwvZDVrAlwBbgAHAQ2GrJp48iPyhsk8C4XqlIeKjbJ1+A18Ar4BtwqWDfSeSH0CbLIoPwUGqPAjuFvRO4glqy2grw6wP3gNPCNkEM+bByEQjJnxG2D8B7kW8Cj8hXhJD8KWEbB86SsEz6qDt0IfK4HRJHfhK1PO0PnkPkKYKPut8kyd8BzmHYI3QD80HakzEID0VQXkmbIHovzwtsss402UTwgQdam7eIuQ+IOhYP6+T6CSANeVk3LxHiyN9M8AtwUtRrbsBfLNZDXr6TVQQfeKi1ccPg10cRb5LTHBjutGQQUykbj3v3Kel2qD5q/liP6LkjC/m12jCJEEf+Og7I3yEbedlWWhHaiCdvFXmSl22aRGhDbaCck9cnvEny6X5JE2N7kKa1srEcfK47wKLISx+6CJ+Az5ptNEefqQMrmrz0pYsg09UCfBoDskVe+jwPfBc+l4j+wrMCF+QlGsA+YC/F/Ho0Ygx35EuB39SYPMBllAij1JB8C1WHnFU91Le1HuCdm3DcQV/q+t2GYxdx6/xxpxFZRj81X+cHqDF5L0jHgvwzNtm/vrLiH0YDigLfXr1fAAAAAElFTkSuQmCC" />
                    <image id="image3_0_1" width="64" height="64"
                        xlink:href="data:image/png;base64,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" />
                    <image id="image4_0_1" width="100" height="100"
                        xlink:href="data:image/png;base64,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" />
                    <image id="image5_0_1" width="64" height="64"
                        xlink:href="data:image/png;base64,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" />
                    <image id="image6_0_1" width="100" height="100"
                        xlink:href="data:image/png;base64,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" />
                    <image id="image7_0_1" width="64" height="64"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAAChklEQVR4nO2azW7UMBCAv0VoT+XU9tA+CtpKwLkI6KNwoAhx6KWwfZ7lXCohbpV4CdJzWXrhUIWDx1Vq2V0n8U+S+pOsbGyPPTOxx87GUCj0YQ6cAVdABSwlb2hy0VgCtZGWA5SLRiVKPAcW8rsaoFw09FNw3Q9FzskTz3rNudccfi7MYWqmmHJRYoNt7tkU22RASrmvAey+ozn3mgxxCkSJDS4FtWMWwEGLjmPL9Y4NAG+AC+DmgQZtU8Nn6MWW02U3wHfgtUfbGzuyOWAudSvab2hiytl0P/VoH1BPvgb+AR+AfQINqYRoffeBY5QtNXDoI3whlY8tDY4FU9+Pcn/uI/xXKu9ZGhxb0uzJ/do0dmZxQG0pG9PTb2Kz4Z7NT3s0OGS8H5jvVniydHXAT/LPbzP96GJI2xgwM+6Hhqlf8Bjg6vChTlLmtabEgNwK5ObRO6BvDHDNPVt+irzWlBHQU76sAmOnOCC3Arkpq0CIRsZMWQW6Ck6F4oDcCuSmrAIhGhkzZRXoKjgVigM8613JdRFLkYAcyLXzAQnzuxqob/C5//dvm7542OXtgLk4oSK9IW3TbzHePDfQywFTwGpXCYK5FchNcUBuBXJTHND4rb/5a3IvZ6FT0667swRTOAfUlRnY3wZDnAPSzgx1pihke/cedKwYEPLdoffe3peQO8AY7w7m3r4rTjvXUrAVoJOQ7w6uvX0Xnkmbf2yFv6TwRYCOhsorlI2XOqMZA1ZyfZ9So8Ro21a2wl3U0KiBT6k0SshnlG3XwI6r0hFwKxVXwEvCxIRcbKGG/TeUTbfA201CRygv5d65hU7XwDtfz+0AJ6hgoVeHMaa12HACbPsaX3hM/AeG3623x2TaQwAAAABJRU5ErkJggg==" />
                    <image id="image8_0_1" width="50" height="50"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAE10lEQVRoge2aX2jWVRjHP7N01ja3cjmoiFoRKYQOWiVI2sqrSJtWV10GUVp3YZYKmxddRH+wiyAohCCC6N9EhCiQulimTrvYlhkFEcFM517zz4art4vnOTu/9/f+zvn9Oy+N8AsH957zPOd5zp/ne55zfsIV/D/QDDwPfAec1zIMbAUWZdC/HhgERoFLwCTwJfAE0NQAfxNxE3AcqDrKCHCjR/8e4A+P/ufANQ3yfQ7N2EGMAhuBNi2PAePadpTklbkZOKUyXwNrgMXADcDTkbYPGjkIgBfU0BjQntDejh3MloT297RtCLgqof1OYEpl1gTw14lDamSjR6ZfZYZj9YuAc8A/wK0e/QHVf6e4m+n4S420eWSWqMy5WP0dWv9zio0HVO6bPI4tyCMM/J1BxrBOXDaLbmH5vAMZ138f8siYtrFY/e/IinYDt3n0H3boB8VzyLKPkxzsHcAJlXk2of1dbdtHcrDfBVRUZnUAf51YiFBrFfgRCewlWjZhB3FYZePowlLsQWAtQr9dwDPAaW3b28hBRJ0xFJtUxlXGhZXAWY/+AeS8aigWAm8Csx5HLgOvOpzpBD706Bq2S9qWhbAM2A0cw+ZSI8D3amwG2AP0AtcCLfr368BF7KEX3V6dSDZQBSaAl5CYWIzEWx/wEXLOmFTlaMz+IJIFZMLjyKz4Zm2HR38F8KvKvaV1TUhMVIFvdVAu7EmxXUHiMXUQZkY+Q4KxBZmx9UiGaraP73RfgazMZWA58KTq/YIwmwubsNt2P0LFrerDOmSVqsgZ0+/qZBl2JV50yDRhU4g/8S/zGyr3GvCV/v2UR74LOKNyL3vktqnMFI6V3Y1diTQcyGDwXpX5CZjW0uKR34k9Y9IwpLIDSY0mPV+boaP1KnvEI9NG7d4+mdLniMr1ZbD/IPbuUwezrVozdLRUZc862juBXdQH6QDu7WjSd18MGZhJiiemgD2ksgzEdDSZ0Nav9S7WmSKZdULZ54g2rsvQUR82FYmiH2GUOOvFWWeW+sGEsA/AK9iDKA37VHZ7pK4LO6su1gPLOpPUpjJl7dc4Yuhvm6eT7SpzGqFsgzysZ1hnMKD9GkS3xhDCDq1a+rAzMUv9gZiH9QzrHAtovw4bkFzKFawzwKMJehfIH6znA9qvQTfyTOPLdarISR2/5YVgnTL257A64swEkhiuwrJOD3L6movRJHB/RL8s65S1D8Dt2APpY9JfST7BHojdWl+GdULYB+TpxXSS5e11AfCp6hzUujKsE8L+XN40gX8m4mhHMuBoflSEdYLZ36s/fJclF0w+9X6kbgOS6boCdZpa1glm/6T+WFmgox7VPaG/b8Eedr7yhcoGtW/u2HmW1cDQ6AXgbiyjZGGdU6oTyv7cLBWF0TcO5mEdoxPCfrCOirLOvBtIGdYpbT/6iF3kdS+q8zbySJ0VFdUJYr8JocNmZL/uR9KG48ipOaUF5AraAVyHBHEv8Aj2UFsF/JDTkR7svbuM/WmQt6wx0ikzrZRhnTJlFNgcDcxeJHHrRb7ldSD72Hw+qOjsVJAnnsPI5+lD2l70s7KJj/uQJDCP/WEc192ijgRhnTLI+8Vq3iLkQMqyXilcHaCPGcSh3yjGOqCs81+jLOuNApvLOhHyP7AUYb2grHMF8wn/Aq2maodokNF1AAAAAElFTkSuQmCC" />
                </defs>
            </svg>

            <!-- for mobile device -->
            <div class="mobilesvgsection">
                <div class="msvgcontain">
                    <img class="msvg" src="iconsvg/Organizing.svg" alt="" />
                    <span class="msvgh1">Organizing</span>
                    <p>
                        MIC organising teams work with the flow of time. Recently, we have
                        taken the interviews of the associate members which was done
                        successfully. We have given ideas about a new event and how to
                        organise accurately.
                    </p>
                </div>
                <div class="msvgcontain">
                    <img class="msvg" src="iconsvg/AppandWeb.svg" alt="" />
                    <span class="msvgh1">App and Web Development</span>
                    <p>
                        MIC App and Web Development department develops and maintains
                        apps, websites and chatbots. This department also offers various
                        technical courses related to programming languages, app and web
                        development.
                    </p>
                </div>
                <div class="msvgcontain">
                    <img class="msvg" src="iconsvg/Industrial_coll.svg" alt="" />
                    <span class="msvgh1">Industrial Collaboration & HR</span>
                    <p>
                        We are in charge of managing collaboration with other club and
                        partnering with them. We gather and keep data of vital information
                        of our club.
                    </p>
                </div>
                <div class="msvgcontain">
                    <img class="msvg" src="iconsvg/Marketing.svg" alt="" />
                    <span class="msvgh1">Marketing</span>
                    <p>
                        "Words are powerful. We the Marketing team play with words to
                        uphold the Club's stature. We are here to communicate in the most
                        effective way. We network, talk, and convince people for the
                        collective purpose of the club."
                    </p>
                </div>
                <div class="msvgcontain">
                    <img class="msvg" src="iconsvg/Soft_skills.svg" alt="" />
                    <span class="msvgh1">Soft Skills</span>
                    <p>
                        Soft Skills improve employability,adaptability which ensures
                        survival at the modern workplace even in high-tech environments
                        and also allow our hard skills to shine
                    </p>
                </div>
                <div class="msvgcontain">
                    <img class="msvg" style="margin-bottom: 20px" src="iconsvg/Machine_Learning.svg"
                        alt="" />
                    <span class="msvgh1">Machine learning & micro-controller</span>
                    <p>
                        Innovation the name itself describe our work in this club.Extremely Motivated and willing to
                        learn all the
                        new aspects of AI and contribute to both the club and global knowledge with help of it and We
                        also try to
                        find innovative ideas and try to make them reality with the help of amazing micro elements.
                    </p>
                </div>
                <div class="msvgcontain">
                    <img class="msvg" src="iconsvg/CreativeDesign.svg" alt="" />
                    <span class="msvgh1">Creative Design</span>
                    <p>
                        Basically we de any kind of design for this club. From digital to
                        printing items like posters, banners etc all are done by this team
                        and also co operate with other teams.
                    </p>
                </div>
                <!-- <div class="msvgcontain">
          <img class="msvg" src="iconsvg/Microcontroller.svg" alt="" />
          <span class="msvgh1">Micro Controller and Interfacing</span>
          <p>
            Innovation the name itself describe our work in this club. We try
            to find innovative ideas and try to make them reality with the
            help of amazing micro elements.
          </p>
        </div> -->
                <div class="msvgcontain">
                    <img class="msvg" src="iconsvg/Video_Editing.svg" alt="" />
                    <span class="msvgh1">Video Editing</span>
                    <p>
                        Though it is a very demandable department but the manpower is too
                        short. With this team we are going forward.We prepare videos for
                        different activities of the club and thus contribute to it
                    </p>
                </div>
                <!-- <div class="msvgcontain">
          <img class="msvg" src="iconsvg/Research.svg" alt="" />
          <span class="msvgh1">Research & Development</span>
          <p>
            Aspiring members here work to develop projects and offer new
            innovative ideas to the club having a sufficient knowledge about
            microcontrollers, modeling & soft skills.
          </p>
        </div> -->
            </div>
        </div>
    </section>
    <div class="spacer layer2"></div>

    <section class="blue" id="start">
        <div class="blobtext">
            <h2>
                So What Are You <br />
                Waiting For?
            </h2>
            <h1>Join Us Now</h1>
            <a href="associate_requit_form" class="cta">
                <span>Register</span>
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
            </a>
        </div>
        <svg class="blobmotion" id="visual" viewBox="0 0 960 540" width="960" height="540"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <g transform="translate(499.3348325719433 290.4760345556223)">
                <path id="blob1"
                    d="M178.8 -188.3C213.8 -143.8 211.9 -71.9 195.8 -16.1C179.8 39.8 149.6 79.6 114.6 111.9C79.6 144.2 39.8 169.1 -19.9 189C-79.5 208.9 -159.1 223.8 -201.1 191.4C-243.1 159.1 -247.5 79.5 -245 2.5C-242.5 -74.5 -233 -149 -191 -193.5C-149 -238 -74.5 -252.5 -1.3 -251.2C71.9 -249.9 143.8 -232.8 178.8 -188.3"
                    fill="#22467b"></path>
            </g>
            <g transform="translate(535.2166461396198 299.43595933271746)" style="visibility: hidden">
                <path id="blob2"
                    d="M141.4 -161.2C171.1 -111.7 174.5 -55.9 177.7 3.2C180.9 62.2 183.8 124.5 154.1 152.6C124.5 180.7 62.2 174.7 -6.2 181C-74.7 187.2 -149.4 205.7 -205.7 177.6C-261.9 149.4 -299.7 74.7 -287.9 11.8C-276.1 -51.1 -214.8 -102.3 -158.5 -151.8C-102.3 -201.3 -51.1 -249.1 2.4 -251.5C55.9 -253.9 111.7 -210.7 141.4 -161.2"
                    fill="#22467b"></path>
            </g>
        </svg>
    </section>
    <div class="flip spacer layer2"></div>
    <section class="dark aboutdark">
        <h1>About us</h1>
        <hr style="color: white; width: 80%" />
        <p>
            MIST Innovation Club, established earlier this year is the fastest
            growing club in here at MIST. With the goal to become one of the biggest
            technical platforms in the country, MIST Innovation is actively engaged
            in the fields of skill development. Public speaking, Programming
            language, Digital design and Technological innovation. MIC is under the
            coordination of talented students from all Department of this
            Institution dedicated to the success and development of this club. The
            club is also under the mentorship of professional individuals who
            constantly guide the member towards greater innovation. MIST Innovation
            Club was built on some fundamental principles.
        </p>
    </section>
    <!-- ----- Footer ----- -->
    <footer>
        <canvas class="footer-canvas" style="margin-top: -20px"></canvas>
        <div class="footerbody">
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>
            <ul class="social_icon">
                <li>
                    <a href="https://www.facebook.com/MISTInnovationClub" target="_blank">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/mist-innovation-club/" target="_blank">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/mistinnovationclub/" target="_blank">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>
            </ul>
            <p>Visit The Main Website</p>
            <p>&copy2023 <a href="https://innovationclub.mist.ac.bd/" target="_blank">Mist Innovation Club</a> | All
                Rights
                Reserved</p>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- javaScripts -->
    <script src="{{ asset('canvas/canvas.js') }}"></script>
    <script src="{{ asset('canvas/canvas-footer.js') }}"></script>

    <script>
        const tween = KUTE.fromTo(
            "#blob1", {
                path: "#blob1",
            }, {
                path: "#blob2",
            }, {
                repeat: 999,
                duration: 2000,
                yoyo: true,
            }
        );

        tween.start();
    </script>
</body>

</html>
