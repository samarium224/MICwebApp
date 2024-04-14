@include('base')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Event</title>
</head>

<body data-bs-theme="dark">
    <div class="container">
        <h1 class="text-center my-5">Make New Event</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('events.store') }}">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="eventname" class="form-label">Event Name</label>
                <input type="text" class="form-control" id="eventname" name="eventname" aria-describedby="Event">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Event Description</label>
                <input type="text" class="form-control" id="description" name="description"
                    aria-describedby="Eventdescription">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
