@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-header">
            Book details
        </div>

            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">{{ $book->author }}</p>
                <p class="card-text">{{ $book->isbn }}</p>
                <form method="get" action="{{ route('edit_book', ['id' => $book->id]) }}">
                    @csrf
                    <button type="submit" class="btn btn-warning">Edit</button>

                </form>
                <form method="post" action="{{ route('delete_book', ['id' => $book->id])}}">
                    <input type="hidden" name="_method" value="delete" />
                    @csrf

                    <td><button type="submit" class="btn btn-danger">Delete</button><td>
                </form>
            </div>

    </div>
@stop
