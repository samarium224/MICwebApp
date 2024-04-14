@include('base')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Task</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{route('UpdateItem')}}">
            @csrf
            <input type="hidden" name="task_id">
            <input type="text" name="id" value="{{$ListItem->id}}" >
            <label class="form-label" for="text">Edit Todo list</label>
            <input type="text" class="form-control" name="name" value="{{$ListItem->name}}">
            <label class="form-label" for="text">Status Edit</label>
            <input type="text" class="form-control" name="IsComplete" value="{{$ListItem->IsComplete}}">
            <button class="mt-3 btn btn-info" type="submit">Update Task</button>
        </form>
    </div>

</body>
</html>
