@extends('layouts.app')
@section('content')
    @php
        use Illuminate\Support\Facades\App;
    @endphp
    <section class="title">
        <h2>{{ $textVariables['main.title-reviews']->{'text_' . App::getLocale()} }}</h2>
    </section>
    <section class="reviews">
        @foreach($reviews as $review)
            <div class="review">
                <h2 class="review__title">{{$review->title}}</h2>
                <p class="review__text">
                    {{$review->text}}
                </p>
                <h3 class="review__names">• {{$review->names}}</h3>
                <img src="{{ asset('storage/' . $review->img)}}" alt="" class="review__img" />
            </div>
        @endforeach


    </section>
    <section class="pagination">
        {{$reviews->links()}}
    </section>
@endsection
