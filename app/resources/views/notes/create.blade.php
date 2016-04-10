@extends('layout')
    @section('content')

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Create a note</h1>

                @include('partials.errors')

                <form action="{{ url('notes') }}" method="post" class="form">
                    {!! csrf_field() !!}
                    <textarea name="note" rows="3" cols="40" class="form-control" placeholder="Write your note here...">{{ old('note') }}</textarea><br>
                    <button type="submit" class="btn btn-primary">Create note</button>
                </form>
            </div>
        </div>

    @endsection
