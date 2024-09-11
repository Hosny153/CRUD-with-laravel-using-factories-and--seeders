@extends('Layout.Design')
@section('content')
<div class="container">
    <div class="d-flex justify-content-center ">
        <div style="width: 30rem" class="card p-1 mt-5">
            <div class="card-title">
                <h1 class="text-center bg-dark text-light p-2" >Add Products</h1>
            </div>
            <div class="card-body">
                <form action="{{ route("Pages.store") }}" method="POST">
                    @csrf
                    <input class="form-control mt-3" type="text" name="name" placeholder="Name">
                    <input class="form-control mt-3" type="text" name="brand" placeholder="Brand">
                    <input class="form-control mt-3" type="number" name="price" placeholder="Price">
                    <textarea rows="3" class="form-control mt-3" name="desc" placeholder="Description"></textarea>
                    <button type="submit" class="btn btn-primary w-100 mt-3" >Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection