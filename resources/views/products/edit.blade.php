<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <form action="{{ route('product.update',$product->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>product Name:</strong>
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>product price:</strong>
                            <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>product amount:</strong>
                            <input type="number" min="1" name="amount" class="form-control" value="{{ $product->amount }}">
                        </div>
                    </div>
                    <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
