@extends('layouts.master')

@section('title')
    Laravel Library
@endsection

@section('content')
    @foreach($books->chunk(3) as $booksChunk)
        <div class="row">
            @foreach($booksChunk as $book)
                <div class="col-sm-6 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $book->image_path }}" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}e</h5>
                            <p class="card-text"> {{ $book->description }}</p>
                            <div class="float-left free">
                                <p>Free</p>
                            </div>
                            <div class="float-right">
                                <a href="{{ route('book.addToBorrow', ['id' => $book->id]) }}" class="btn btn-success">borrow</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection