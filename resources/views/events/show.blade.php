{{-- @extends('layout')

@section('content') --}}

<x-layout>
    

<a href="/" class="inline-block text-black ml-4 mb-4 text-white"><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
  <x-card class="p-2 bg-black text-white">
    <div class="flex flex-col border border-gray-200 items-center justify-center text-center">
      <img class="w-40 mr-6 mb-6"
        src=" {{asset('images/docker.png')}}
        {{-- {{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}} --}}
        " alt="" />

      <h3 class="text-2xl mb-2">
        {{$event->title}}
      </h3>
      <div class="text-xl font-bold mb-4">{{$event->location}}</div>

      {{-- <x-listing-tags :tagsCsv="$listing->tags" /> --}}

      <div class="text-lg my-4">
        <i class="fa-solid fa-location-dot"></i> {{$event->location}}
      </div>
      <div class=" w-full mb-6"></div>
      <div>
        <h3 class="text-3xl font-bold mb-4">Description</h3>
        <div class="text-lg space-y-6">
          {{$event->description}}

          {{-- <a href="mailto:{{$listing->email}}"
            class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
              class="fa-solid fa-envelope"></i>
            Contact Employer</a> --}}

          <a href="{{$event->url}}" target="_blank"
            class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i>
            Go to Event</a>
        </div>
      </div>
    </div>
  </x-card>

  {{-- <x-card class="mt-4 p-2 flex space-x-6">
    <a href="/listings/{{$listing->id}}/edit">
      <i class="fa-solid fa-pencil"></i> Edit
    </a>

    <form method="POST" action="/listings/{{$listing->id}}">
      @csrf
      @method('DELETE')
      <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
    </form>
  </x-card> --}}
</div>

</x-layout>

{{-- @endsection --}}