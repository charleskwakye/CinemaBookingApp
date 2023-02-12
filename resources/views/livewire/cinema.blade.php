<div class="grid lg:grid-cols-2 grid-cols-1 gap-8">
    {{-- show preloader while fetching data in the background --}}
    <div class="fixed top-8 left-1/2 -translate-x-1/2 z-50 animate-pulse"
         wire:loading>
        <x-reusable.preloader class="bg-lime-700/60 text-white border border-lime-700 shadow-2xl">
            {{ $loading }}
        </x-reusable.preloader>
    </div>
    @php
            function convert_minutes_to_hours($minutes) {
            $hours = floor($minutes / 60);
            $remaining_minutes = $minutes % 60;
            return $hours . ' hour(s):' . $remaining_minutes . ' minute(s)';
        }
    @endphp
    {{--https://image.tmdb.orgt/p/original/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg--}}
    @foreach($showtimes as $showtime)
        <div wire:key="showtime-{{ $showtime->id }}"
             class="flex flex-col md:flex-row md:h-72 lg:h-100 ">

            <img class=""
                 src="storage/123456.jpg" alt="movie cover">
            <div class="m-2">
                <h5 class="text-xl font-bold text-gray-900">{{$showtime->movie->title}} <span class="text-sm text-gray-400">({{floor($showtime->movie->length / 60)}}h{{$showtime->movie->length % 60}})</span> </h5>
                <p class="">{{$showtime->movie->summary}}</p>
                <p class="text-sm text-gray-400">Release date: {{$showtime->movie->release_date}}</p>
                <p class="text-sm text-gray-400">Rating: {{$showtime->movie->rating}}</p>
                <p class="text-sm text-gray-400">Genre: {{$showtime->movie->genre}}</p>
                <p class="text-sm text-gray-400">Language: {{$showtime->movie->language}}</p>
                <p class="text-sm text-gray-400">Price:{{$showtime->priceEuro}}</p>
            </div>
        </div>
    @endforeach


</div>
