@include('base');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello world</title>


</head>
<body>
<div class="todocontainer">
    <form method="post" action="{{route('SaveItem')}}">
        {{ csrf_field() }}
        <label class="form-label" for="text">Enter Todo list</label>
        <input type="text" class="form-control" name="list">
        <input class="mt-3 btn btn-dark" type="submit" name="submit" value="submit">
    </form>
</div>
<div class="my-5">
    <table class="table table-responsive table-striped">
        <tr class="text-center">
            <th style="width: 40%">
                Ongoing Task
            </th>
            <th>
                Status
            </th>
            <th style="width: 30%">Action</th>
        </tr>
        @foreach ($ListItem as $list)
        <tr class="text-left">
            <td class="px-4">{{$list -> name}}</td>
            <td class="text-center"> @if ($list -> IsComplete == 0)
                Not Completed
                @else
                Completed
            @endif </td>
            <td>
                <div class="d-flex">
                    <form class="px-2" id="actionForm" method="POST" action="{{ route('markComplete', $list->id) }}">
                        {{ csrf_field() }}
                        <button type="submit" name="markcompletetask" class="btn btn-success btn-sm">Mark as Complete</button>
                    </form>
                    <form class="px-2" id="actionForm" method="GET" action="{{ route('EditTask', $list->id) }}">
                        {{ csrf_field() }}
                        <button type="submit" name="editTask" class="btn btn-primary btn-sm">Edit</button>
                    </form>
                    <form class="px-2" id="actionForm" method="GET" action="{{ route('EditTask', $list->id) }}">
                        {{ csrf_field() }}
                        <button type="submit" name="MailTask" class="btn btn-warning btn-sm">Mail ED for Immidiate Backup</button>
                    </form>
                </div>

            </td>
        </tr>
        @endforeach

        </table>
</div>

</body>
</html>
