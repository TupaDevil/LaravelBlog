
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include ('layouts.main')

    <div class="ms-5"> 
        <div>id:&nbsp;{{ $friend->id }} <br>
        Имя:&nbsp;{{ $friend->name }} <br>
        Возраст:&nbsp;{{ $friend->age }} <br>
        Живой:&nbsp;{{ $friend->alive }} <br>
        Предпочитаемое оружие:&nbsp;{{ $friend->prefered_weapon }}</div>

        <form action="{{ route('friend.delete', $friend)}}" method="post">
        <a class='btn btn-primary' href="{{ route('friend.index') }}">Back to spisok</a> 
        <a class='btn btn-warning' href="{{ route('friend.edit', $friend) }}">Edit friend</a>
        @csrf
        @method('delete')    
        <input type="submit" class='btn btn-danger' value="Delete friend">
    </form>
    </div>

</body>
</html>