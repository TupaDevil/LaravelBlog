
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
        @foreach ($friends as $friend )
        <div> 
            <a href="{{ route('friend.show', $friend) }}"> {{ $friend->name }}</a> 
        </div>
        @endforeach
        <a class='btn btn-primary' href="{{ route('friend.create') }}">Создать</a> </div>
    </div>
</body>
</html>