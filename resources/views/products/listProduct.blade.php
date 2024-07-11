<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List user</title>
</head>

<body>
    <a href="{{ route('products.addProduct') }}">Add</a>
    <form action="{{ route('products.searchProduct') }}" method="get">
        @csrf
        <input type="text" name="search" placeholder="Search product" required>
        <button type="submit">Search</button>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Price</th>
                <th>View</th>
                <th>Category</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($listProducts as $key => $product)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $product -> name }}</td>
                <td>{{ $product -> price }}</td>
                <td>{{ $product -> view }}</td>
                <td>{{ $product -> category_name }}</td>
                <td>
                    <button><a href="{{ route('products.deleteProduct', $product -> id )}}">Delete</a></button>

                    <button><a href="{{ route('products.editProduct', $product -> id) }}">Update</a></button>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>