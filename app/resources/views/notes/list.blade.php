@extends('layout')

    @section('content')
        <h2>Notes</h2>
        <p>
            <a href="{{ url('note/create') }}">Add a note</a>
        </p>
        <ul class="list-group">
            @foreach($notes as $note)
                <li class="list-group-item">
                    {{-- @if(strlen($note->note) > 50)
                        {{ substr($note->note, 0, 50) }} ...
                    @else
                        {{ $note->note }}
                    @endif --}}
                    <span class="label label-info">{{ $note->category->name }}:</span> 
                    {{ $note->note }}
                </li>
            @endforeach
        </ul>

        {!! $notes->render() !!}
    @endsection
