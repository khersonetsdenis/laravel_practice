@extends('layouts.default')
@section('content')
    <form method="post">
        <div class="form-group">
            @csrf
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title" name="title" value="{{ $book->title }}">
            <small id="titleHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" aria-describedby="authorHelp" placeholder="Enter author name" name="author" value="{{ $book->author }}">
            <small id="authorHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" id="isbn" aria-describedby="isbnHelp" placeholder="Enter ISBN" name="isbn" value="{{ $book->isbn }}">
            <small id="isbnHelp" class="form-text text-muted"></small>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@stop
