@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit a Product</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/products/{{ $product->id }}" method="POST">
                        @csrf
                        @method('PATCH')

                        @include('product.form')

                        <button type="submit" class="btn btn-primary">Update Product</button>
                        <a href="/products" class="btn btn-dark">Back</a>
                        
                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
