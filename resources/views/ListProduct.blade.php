<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Product</title>
</head>

<body>
    <table border="1">
        <tr>

            <td>ID</td>
            <td>Name</td>

        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{ $value['FullName'] }}</td>
            <td>{{ $value['name'] }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>