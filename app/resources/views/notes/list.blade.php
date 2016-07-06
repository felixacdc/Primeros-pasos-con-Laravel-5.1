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
                    @if( $note->category )
                        <span class="label label-info">{{ $note->category->name }}:</span>
                    @else
                        <span class="label label-info">It does not have category</span>
                    @endif
                    {{ substr($note->note, 0, 100) }}...
                    <a href="{{ url('notes/' . $note->id) }}">View note</a>
                </li>
            @endforeach
        </ul>

        {!! $notes->render() !!}
    @endsection
