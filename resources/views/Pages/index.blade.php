@extends('Layout.Design')
@section('content')
<h1 class="text-center p-3">All Products</h1>
<div class="container">
    <table class="table mt-2 table-bordered table-hover table-warning table-striped" >
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Brand</th>
                <th class="text-center">Price</th>
                <th class="text-center">Description</th>
                <th class="text-center">Show</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $Products as $product )
            <tr>
                <td class="text-center">{{ $product->id }}</td>
                <td class="text-center">{{ $product->name }}</td>
                <td class="text-center">{{ $product->brand }}</td>
                <td class="text-center">{{ $product->price }}</td>
                <td class="text-center">{{ $product->desc }}</td>
                <td class="text-center"><a class="btn btn-primary" href="{{ route('Pages.show',$product->id)  }}">Show</a></td>
                <td class="text-center"><a class="btn btn-success" href="{{ route('Pages.edit',$product->id ) }}">Edit</a></td>
                <form action="{{ route('Pages.delete',$product->id )}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td class="text-center"><button class="btn btn-danger" type="submit">Delete</button></td>
                </form>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection