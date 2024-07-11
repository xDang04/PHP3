<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Up Product</title>
</head>

<body>
    <form action="{{ route('products.updateProduct') }}" method="POST">
        @csrf
        <input type="hidden" name="idProduct" value="{{ $product -> id }}">
        Name : <input type="text" name="name" value="{{ $product -> name }}"><br>
        Price : <input type="text" name="price" value="{{ $product -> price }}"><br>
        View : <input type="text" name="view" value="{{ $product -> view }}"><br>

        category :
        <select name="category" id="">

            @foreach($category as $value)
            <option 
                @if ($product->category_id === $value->id)
                    selected
                @endif
                    value="{{ $value -> id }}">
                {{ $value -> name}}
            </option>
            @endforeach
        </select><br>
        <button type="submit">Update</button>

    </form>
</body>

</html>