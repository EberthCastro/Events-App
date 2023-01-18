@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')
    



@unless (count($events) == 0)


@foreach($events as $event)

<x-event-card :event="$event"/>
@endforeach

@else
<p>No Events Found</p>
@endunless

</div>

@endsection