@extends('layout')

    @section('content')
        <h2>Notes</h2>
        <p>
            <a href="{{ url('note/create') }}">Add a note</a>
        </p>
        <ul>
            @foreach($notes as $note)
                <li>
                    {{-- @if(strlen($note->note) > 50)
                        {{ substr($note->note, 0, 50) }} ...
                    @else
                        {{ $note->note }}
                    @endif --}}
                    {{ $note->note }}
                </li>
            @endforeach
        </ul>

        {!! $notes->render() !!}
    @endsection
