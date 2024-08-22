
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>List user</title>
     --}}
@section('title')
    @parent
@endsection
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @push('style')
    input {
        margin-top: 20px;
        width: 50%;
        border-radius: 5px;
    }

    body {
        margin-left: 100px;
    }

    a {
        text-decoration: none;
        color: black
    }
    @endpush
    <style>
        
    </style>
</head>

<body>
    <button class="btn btn-primary"><a href=" {{ route('admin.product.addProduct')}}">Add</a></button>
    {{-- <button class="btn btn-warning"><a href="{{ route('products.listProducts') }}">List</a></button>
    <form action="{{ route('products.searchProduct') }}" method="get">
        @csrf
        <input type="text" name="search" placeholder="Search product" required style="width:30%">
        <button class="btn btn-primary" type="submit">Search</button>
    </form> --}}
    <table class="table table-bordered" style="width:90%">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Price</th>
                <th>description</th>
                <th>image</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($listProducts as $key => $product)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $product -> name }}</td>
                <td>{{ $product -> price }}</td>
                <td>{{ $product -> description }}</td>
                <td>
                    {{-- {{ $product -> image }} --}}
                    <img src="/{{ $product->image}}" alt="erorr">
                </td>

                {{-- <td>{{ $product -> category_name }}</td> --}}
                <td>
                    {{-- <button class="btn btn-primary"><a
                            href="{{ route('products.deleteProduct', $product -> id )}}">Delete</a></button>

                    <button class="btn btn-warning"><a
                            href="{{ route('products.editProduct', $product -> id) }}">Update</a></button> --}}
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>


{{-- @extends('admin.layout.default')

@section('title')
@parent
Danh sach product


@section('content')


<div class="p-4" style="min-height: 800px;">
    <h4 class="text-primary mb-4">Danh sách sản phẩm</h4>
    <button class="btn btn-info">Thêm mới</button>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá sản phẩm</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Nokia 520</td>
                <td>15000000 vnđ</td>
                <td>
                    Điện thoại mới giá ổn
                </td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Nokia 520</td>
                <td>15000000 vnđ</td>
                <td>
                    Điện thoại mới giá ổn
                </td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Nokia 520</td>
                <td>15000000 vnđ</td>
                <td>
                    Điện thoại mới giá ổn
                </td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Nokia 520</td>
                <td>15000000 vnđ</td>
                <td>
                    Điện thoại mới giá ổn
                </td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
@endsection --}}