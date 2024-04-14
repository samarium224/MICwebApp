@include('base')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News & Events</title>
    <link rel="stylesheet" href="storage/css/newsandevent.css">
    <link rel="stylesheet" href="storage/css/index.css">
</head>

<body>
    <section class="news_event">
        <div class="container">
            <h1 class="text-left mt-5">Upcoming Events</h1>
            <hr>
            <a href="/newsandevents/create">
                <button class="btn btn-success">make event</button>
            </a>
        </div>
        <br>
        {{-- @foreach ($Events as $Event)
        <div class="container flex-container">
            <div class="event_date">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text" style="font-size: 30px;"><b>JUN</b><span class="break"></span></p>
                        <p class="card-text" style="font-size: 65px;"><b>23</b></p>
                        <br>
                    </div>
                </div>
            </div>
            <div class="event_image">
                <div class="card">
                    <div class="card-body1">
                        <img src="/storage/img/demo_event.jpg" class="card-body img">
                    </div>
                </div>
            </div>
            <div class="event_content">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-text"><b> {{$Event->eventname }} </b></h2>
                        <br>
                        <h6 class="card-text"><b>1015 California Ave,Los Angeles CA
                                7.00 pm - 8.00 pm
                            </b>
                        </h6>
                        <br>
                        <p class="card-text mb-3"> {{$Event->description }}
                            <br>
                        </p>
                        <span class="break"></span>
                        <button class="my-5 btn btn-dark">
                            <a href="event_details" class="text_small">View Event Details
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                                    <path
                                        d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                                </svg>
                            </a>
                        </button>
                        <a href="{{ route('events.edit', ['Event' => $Event])}}">
                        <button class="btn btn-info">Edit</button>
                    </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach --}}
    </section>
</body>
