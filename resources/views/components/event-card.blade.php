@props(['event'])
<div class="lg:grid lg:grid-cols-1 gap-4 space-y-4 md:space-y-0 md:container md:mx-auto">

    <div class="bg-gray-50 border border-gray-200 rounded p-6">
        <div class="flex text-black">
            <img class=" w-20 h-20 mr-6 md:block" src="{{asset('images/logotechcircle.jpg')}}" alt="">
            <div>
                <h3 class="text-2xl">
                    <a href="/events/{{$event->id}}">{{ $event->title }}</a>
                </h3>
                <div class="text-xl font-bold mb-4">{{ $event->description }}</div>
                <ul class="flex">
                    <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                        <a href="#">{{ $event->date }}</a>
                    </li>
                    <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                        <a href="#">{{ $event->time }}</a>
                    </li>
                    <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                        <a href="#">{{ $event->location }}</a>
                    </li>
                    <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                        <a href="#">{{ $event->max_participants }}</a>
                    </li>
                    <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                        <a href="#">{{ $event->available }}</a>
                    </li>
                </ul>
                <div class="text-lg mt-4">
                    <i class="fa-solid fa-location-dot"></i>
                    {{$event->location}}
                </div>
            </div>

        </div>


    </div>
    
    
    {{-- <a href="/events/{{$event['id']}}">
        <h2>{{$event['title']}}  </h2>
    </a>
    <p> {{$event['description']}}</p> --}}


{{-- <p> {{$event['date']}}</p>
<p> {{$event['time']}}</p>
<p> {{$event['max_participants']}}</p>
<p> {{$event['available']}}</p> --}}