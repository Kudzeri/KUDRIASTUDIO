@extends('layouts.app')
@section('content')
    @php
        use Illuminate\Support\Facades\App;
    @endphp

    <section class="title">
        <h2>{{ $textVariables['main.title-portfolio']->{'text_' . App::getLocale()} }}</h2>
    </section>
    <section class="portfolio flex flex-col gap-8">
        @foreach($works as $work)
            <div class="w-full max-w-4xl mx-auto">
                <!-- Универсальный responsive-контейнер -->
                <div class="relative w-full aspect-video overflow-hidden shadow-lg bg-black" style="padding-top:56.25%">
                    @if($work->url)
                        <!-- Vimeo/YouTube iframe -->
                        <iframe
                            src="{{ $work->url }}?title=0&byline=0&portrait=0"
                            class="absolute inset-0 w-full h-full"
                            frameborder="0"
                            allow="autoplay; fullscreen; picture-in-picture"
                            loading="lazy"
                            allowfullscreen></iframe>
                    @else
                        <!-- HTML5 video -->
                        <video
                            controls
                            preload="metadata"
                            class="absolute inset-0 w-full h-full object-cover"
                        >
                            <source src="{{ asset('storage/' . $work->src) }}" type="video/mp4">
                        </video>
                    @endif
                </div>

                <div class="mt-4">
                    <div
                        class="w-full rounded-lg
           {{ $work->description ? 'p-4 h-auto' : 'h-6' }}"
                    >
                        @if($work->description)
                            <p class="text-gray-800">{{ $work->description }}</p>
                        @endif
                    </div>
                </div>

            </div>

        @endforeach
    </section>
@endsection
