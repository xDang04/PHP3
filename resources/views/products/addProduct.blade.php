<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Products</title>
</head>

<body>
    <form action="{{ route('admin.product.addPostProduct')}}" method="POST" enctype="multipart/form-data">
        @csrf
        Name : <input type="text" name="name"><br>
        Price : <input type="text" name="price" min="1000"><br>
        
        image : <input type="file" name="image" accept="image/">
        
        {{-- "><br> --}}
        {{-- Category :
        <select name="category" id="">
            @foreach($category as $value)
            <option value="{{ $value -> id }}">{{ $value -> name}}</option>
            @endforeach
        </select><br> --}}
        <button type="submit">Add</button>

    </form>
</body>

</html>