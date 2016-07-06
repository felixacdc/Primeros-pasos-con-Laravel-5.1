@extends('layout')
    @section('content')

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Create a note</h1>

                <p>
                    Categoria
                    @if( $note->category )
                        <span class="label label-info">{{ $note->category->name }}:</span>
                    @else
                        <span class="label label-info">It does not have category</span>
                    @endif

                    | <a href="{{ url('notes') }}">View  all notes</a>
                </p>

                <hr>

                {{ $note->note }}
            </div>
        </div>

    @endsection
