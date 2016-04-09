@extends('layout')
    @section('content')
        <h1>Create a note</h1>
        <form action="{{ url('notes') }}" method="post" class="form">
            {!! csrf_field() !!}
            <textarea name="note" rows="8" cols="40" class="form-control"></textarea>
            <button type="submit" class="btn btn-primary">Create note</button>
        </form>
    @endsection
