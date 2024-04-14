@include('base')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Event Details</title>
    <link rel="stylesheet" href="storage/css/event_details.css">
</head>

<body>
    <div class="my-3 px-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">News & Events</li>
                <li class="breadcrumb-item active" aria-current="page">Event Details</li>
            </ol>
        </nav>
    </div>
    <div class="flex-container">
        <div>
            <div class="card" style="width: 450px;">
                <div class="card-body">
                    <div class="icon-title">

                        <p class="card-text"><i class="fa-brands fa-squarespace"></i></p>
                        <p class="card-text" style="font-size: 40px;"><b>DESIGN WEEK CONFERENCE</b></p>
                    </div>
                    <div class="icon-title">

                        <p class="card-text"><i class="fa-solid fa-location-dot"></i></p>
                        <p class="card-text" style="font-size: 20px;" style="margin-left: 5px;"><b>North Tentau Avenue
                                Cupertino,CA</b></p>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="horizon"></div>
                    <br>
                    <br>
                    <div class="Date">
                        <div class="card1"style="100px">
                            <div class="card-body">
                                <div class="icon-title">
                                    <p class="card-text"><i class="fa-regular fa-calendar"></i></p>
                                    <p class="card-text" style="font-size: 20px;"><b>Start Date</b></p>
                                </div>
                                <p class="card-text" style="font-size: 30px;"><b>12 APR</b></p>
                            </div>
                        </div>
                        <div class="card1"style="100px">
                            <div class="card-body">
                                <div class="icon-title">
                                    <p class="card-text"><i class="fa-regular fa-calendar"></i></p>
                                    <p class="card-text" style="font-size: 20px;"><b>End Date</b></p>
                                </div>
                                <p class="card-text" style="font-size: 30px;"><b>23 APR</b></p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="icon-title" style="margin-left: 10px;">
                        <p class="card-text"><i class="fa-solid fa-clock"></i></p>
                        <p class="card-text" style="font-size: 20px;"><b>Start Time</b></p>
                    </div>
                    <p class="card-text" style="font-size: 30px;" style="margin-left: 10px;"><b>12:34 AM</b></p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <button class="clickable-button"><b>Click Here to Event</b></button>


                </div>
            </div>
        </div>
        <div>
            <div class="card" style="width: 850px;">
                <div class="card-body">
                    <img src="/storage/img/demo_event.jpg" class="card-body img">
                    <br>
                    <br>
                    <br>
                    <p style="font-size: 30px;"><b>Description</b></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt dolore aliquid officiis laudantium
                        veritatis placeat, dignissimos recusandae, excepturi dicta quod odio beatae vero distinctio
                        aperiam atque quae reprehenderit corporis minus?</p>
                    <p>The Grand Gala is an exquisite event that brings together artists, musicians, and performers from
                        around the world. This captivating evening is filled with enchanting melodies, stunning visual
                        displays, and awe-inspiring acts that will leave you breathless. Immerse yourself in the magical
                        ambiance as you witness captivating dance performances, indulge in delectable cuisine, and
                        mingle with fellow art enthusiasts.</p>

                </div>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
