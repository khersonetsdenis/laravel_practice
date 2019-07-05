@extends('layouts.default')
@section('content')
    <form method="post" action="{{ route('update_book') }}">
        <div class="form-group">
            @csrf
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title" name="title">
            <small id="titleHelp" class="form-text text-muted">{{ $book->title }}</small>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" aria-describedby="authorHelp" placeholder="Enter author name" name="author">
            <small id="authorHelp" class="form-text text-muted">{{ $book->author }}</small>
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" id="isbn" aria-describedby="isbnHelp" placeholder="Enter ISBN" name="isbn">
            <small id="isbnHelp" class="form-text text-muted">{{ $book->isbn }}</small>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@stop
