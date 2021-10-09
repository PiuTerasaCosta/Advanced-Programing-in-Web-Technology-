<style>
    body{
        padding:100px;
    }
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <form action="/Product/Update" method="post">
    {{csrf_field()}}

    <div class="form-group">
            <label for="name">Name</label>
            <input type="hidden" class="form-control" id="id" name="id" value="{{$products->id}}" placeholder="Enter id">
          
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$products->name}}" placeholder="Enter name">
            @error('name')
                <span class="text-danger">{{$message}}</span>
     @enderror
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$products->price}}" placeholder="Price">
            @error('price')
                <span class="text-danger">{{$message}}</span>
     @enderror
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{$products->quantity}}" placeholder="Quantity">
            @error('quantity')
                <span class="text-danger">{{$message}}</span>
     @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$products->description}}" placeholder="Description">
            @error('description')
                <span class="text-danger">{{$message}}</span>
     @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
