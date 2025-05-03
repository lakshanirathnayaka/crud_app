<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a product</h1>
    <form method="post" action="{{route('product.update',['product'=>$product])}}">
        @csrf
        @method("put")
        <div>
            <label>Name : </label>
            <input type="text" name="Name" placeholder="name" value="{{$product->Name}}"/>
        </div>
        <div>
            <label>Qty : </label>
            <input type="text" name="Qty" placeholder="qty" value="{{$product->Qty}}"/>
        </div>
        <div>
            <label>Price : </label>
            <input type="text" name="Price" placeholder="price" value="{{$product->Price}}"/>
        </div>
        <div>
            <label>Description : </label>
            <input type="text" name="Description" placeholder="description" value="{{$product->Description}}"/>
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
        
    </form>
</body>
</html>