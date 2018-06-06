<!-- items.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Item Validation Form</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif
    <form method="post" action="{{url('items')}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="itemName">Item Name:</label>
            <input type="text" class="form-control" id="itemName" name="name">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="price">Upload an image:</label>
            <input type="file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>