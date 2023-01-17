<h1> {{ $heading}}</h1>

@unless (count($events) == 0)
    

@foreach($events as $event)
<h2>{{$event['title']}}  </h2>
<p> {{$event['description']}}</p>
<p> {{$event['date']}}</p>
<p> {{$event['time']}}</p>
<p> {{$event['max_participants']}}</p>
<p> {{$event['available']}}</p>
@endforeach

@else
<p>No Events Found</p>
@endunless