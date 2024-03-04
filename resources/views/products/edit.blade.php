<!DOCTYPE html>
<html lang="en" data-theme="retro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<h1 class="text-3xl text-center font-semibold mb-6">Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul class="text-red-400">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form class="max-w-sm mx-auto" action="{{ route('product.update', ['product'=> $product]) }}" method="post">
        @csrf
        @method('put')
<label class="input input-bordered flex items-center gap-2 mb-2">
  Name
  <input type="text" class="grow" name="name" placeholder="Name" value="{{$product->name}}" />
</label>
<label class="input input-bordered flex items-center gap-2 mb-2">
  Quantity
  <input type="text" class="grow" name="qty" placeholder="Quantity" value="{{$product->qty}}" />
</label>
<label class="input input-bordered flex items-center gap-2 mb-2">
  Price
  <input type="text" class="grow" name="price" placeholder="Price" value="{{$product->price}}"/>
</label>
<label class="input input-bordered flex items-center gap-2 mb-2">
  Description
  <input type="text" class="grow" name="description" placeholder="Description" value="{{$product->description}}"/>
</label>

        <div class="text-center">
            <input class="btn w-full" type="submit" value="Update">
        </div>
    </form>
    </form>
</body>
</html>