@extends('layouts.master')

@section('title')
    Akl-Shaware3 Restaurant
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>Your Total: L.E. {{ $total }}</h4>
            <form id="checkout-form" action="{{ route('checkout') }}" method="post">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" id="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input name="address" type="text" id="address" class="form-control" required>
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">Order now</button>
            </form>
        </div>
    </div>
@endsection