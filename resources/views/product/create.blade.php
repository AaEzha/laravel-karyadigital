@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add a Product</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/products" method="POST">
                        @csrf

                        @include('product.form')

                        <button type="submit" class="btn btn-primary">Add Product</button>
                        <a href="/products" class="btn btn-dark">Back</a>
                        
                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
