<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Products</title>
</head>

<body>
    <form action="{{ route('products.addPostProduct') }}" method="POST">
        @csrf
        Name : <input type="text" name="name"><br>
        Price : <input type="text" name="price" min="1000"><br>
        View : <input type="text" name="view" min="0
        
        "><br>
        Category :
        <select name="category" id="">
            @foreach($category as $value)
            <option value="{{ $value -> id }}">{{ $value -> name}}</option>
            @endforeach
        </select><br>
        <button type="submit">Add</button>

    </form>
</body>

</html>