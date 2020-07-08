@extends('layouts.master')

@section('title')
    Laravel Library
@endsection

@section('content')
    @if(Session::has('borrow'))
        <div class="row">
            @foreach($books as $book)
                <div class="col-sm-6 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $book->image_path }}" alt="...">
                        <div class="card-body">
                            <div class="mx-auto">
                                <a href="{{ route('book.addToBorrow', ['id' => $book->id]) }}" class="btn btn-success btn-lg btn-block">Return</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="row">
            <div class="'col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>You have not borrow any book yet! </h2>
            </div>
        </div>
    @endif
@endsection