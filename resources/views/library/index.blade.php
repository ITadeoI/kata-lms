@extends('layouts.master')

@section('title')
    Laravel Library
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://i.pinimg.com/474x/71/b0/a0/71b0a0f11c5d7c3b6c5b0892e5bd59c3--software-development-elisabeth.jpg" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Book title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    <div class="float-left free">
                        <p>Free</p>
                    </div>
                    <div class="float-right">
                        <a href="#" class="btn btn-success">borrow</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://images-na.ssl-images-amazon.com/images/I/41jEbK-jG%2BL._AC_SY400_.jpg" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Book title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    <div class="float-left free">
                        <p>Free</p>
                    </div>
                    <div class="float-right">
                        <a href="#" class="btn btn-success">borrow</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://m.media-amazon.com/images/I/51bJhsl5VmL.jpg" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Book title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    <div class="float-left free">
                        <p>Free</p>
                    </div>
                    <div class="float-right">
                        <a href="#" class="btn btn-success">borrow</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection