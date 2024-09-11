@extends('Layout.Design')
@section('content')
<div class="container">
    <div class="d-flex justify-content-center ">
        <div style="width: 50rem" class="card p-1 mt-5">
            <div class="card-title">
                <h1 class="text-center bg-dark text-light p-2" >Details</h1>
            </div>
            <div class="card-body">
                <h4 class="text-center" ><span class="fw-bold fs-3 me-2">Name:</span>{{ $Products->name }}</h4>
                <h4 class="text-center" ><span class="fw-bold fs-3 me-2">Brand:</span>{{ $Products->banrd }}</h4>
                <h4 class="text-center" ><span class="fw-bold fs-3 me-2">Price:</span>{{ $Products->price }}</h4>
                <h4 class="text-center" ><span class="fw-bold fs-3 me-2">Description:</span>{{ $Products->desc }}</h4>
            </div>
        </div>
    </div>
</div>
@endsection