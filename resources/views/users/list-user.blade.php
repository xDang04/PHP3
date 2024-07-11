<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List user</title>
</head>

<body>
    <a href="{{ route('users.addUser') }}">Add</a>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Age</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($listUsers as $key => $user)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $user -> name }}</td>
                <td>{{ $user -> email }}</td>
                <td>{{ $user -> ten_donvi }}</td>
                <td>{{ $user -> tuoi }}</td>
                <td>
                    <button><a href="{{ route('users.deleteUser', $user -> id )}}">Delete</a></button>

                    <button><a href="{{ route('users.editUser', $user -> id) }}">Update</a></button>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>