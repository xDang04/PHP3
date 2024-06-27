<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introduction</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>FullName</td>
            <td>Birthday</td>
            <td>Gender</td>
            <td>Address</td>
            <td>Phone</td>
            <td>Email</td>
        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{ $value['FullName'] }}</td>
            <td>{{ $value['Birthday'] }}</td>
            <td>{{ $value['Gender'] }}</td>
            <td>{{ $value['Address'] }}</td>
            <td>{{ $value['Phone'] }}</td>
            <td>{{ $value['Email'] }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>