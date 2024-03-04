<!DOCTYPE html>
<html lang="en" data-theme="retro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-3xl text-center font-semibold">Product</h1>
    <div>
        @if(session()->has('success'))
            <div class="text-blue-400">
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <table class="table">
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
            </tr>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a class="btn" href="{{ route('product.edit', ['product' => $product])}}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('product.delete', ['product' => $product])}}" method="post">
                            @csrf
                            @method('delete')
                            <input class="btn" type="submit" value="Delete" />
                        </form>
                    </td>

                </tr>
                @endforeach
        </table>
        <a class="btn" href="{{ route('product.create') }}">Add new Product</a>

    </div>
</body>
</html>