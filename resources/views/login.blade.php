<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <label for="">email</label>
        <input type="text" name="email" id="email">
        <label for="">password</label>
        <input type="text" name="password" id="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>