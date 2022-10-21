<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <div class="pull-right mb-2">
        <a class="btn text-center bg-light" href="{{ route('product.create') }}"> Create product</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>amount</th>
                <th>created_at</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr class="{{ $loop->even ? 'bg-even' : 'bg-odd' }}">
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->amount }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>

                        <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>delete</button>
                        </form>

                        <form action="{{ route('product.edit',$product->id) }}">
                            <button>edit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
