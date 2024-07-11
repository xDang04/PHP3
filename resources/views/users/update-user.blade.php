<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Up User</title>
</head>

<body>
    <form action="{{ route('users.updateUser') }}" method="POST">
        @csrf
        <input type="hidden" name="idUser" value="{{ $user -> id }}">
        Ten : <input type="text" name="name" value="{{ $user -> name }}"><br>
        Email : <input type="text" name="email" value="{{ $user -> email }}"><br>
        phongBan :
        <select name="phongban" id="">

            @foreach($phongBan as $value)
            <option 
                @if ($user->phongban_id === $value->id)
                    selected
                @endif
                    value="{{ $value -> id }}">
                {{ $value -> ten_donvi}}
            </option>
            @endforeach
        </select><br>
        Tuoi : <input type="text" name="age" value="{{ $user -> tuoi }}"><br>
        <button type="submit">Update</button>

    </form>
</body>

</html>