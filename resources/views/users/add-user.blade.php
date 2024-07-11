<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
</head>

<body>
    <form action="{{ route('users.addPostUser') }}" method="POST">
        @csrf
        Ten : <input type="text" name="name"><br>
        Email : <input type="text" name="email"><br>
        phongBan :
        <select name="phongban" id="">
            @foreach($phongBan as $value)
            <option value="{{ $value -> id }}">{{ $value -> ten_donvi}}</option>
            @endforeach
        </select><br>
        Tuoi : <input type="text" name="age"><br>
        <button type="submit">Add</button>
        
    </form>
</body>

</html>