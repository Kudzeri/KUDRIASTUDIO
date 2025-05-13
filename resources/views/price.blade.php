@extends('layouts.app')
@section('content')
    @php
        use Illuminate\Support\Facades\App;
    @endphp
    <section class="price">
        <h2 class="price__title">{{ $textVariables['main.title-price']->{'text_' . App::getLocale()} }}</h2>
        <div class="product">
            <h2 class="product__title">{{ $textVariables['main.wf']->{'text_' . App::getLocale()} }}</h2>
            <h6 class="product__text">
                {!! $textVariables['main.wf-desc']->{'text_' . App::getLocale()} !!}
            </h6>
            <h3 class="product__price">2500 €</h3>
            <img src="{{ asset('img/WEDDINGFULL.png')}}" alt="" class="product__img" />
        </div>
        <div class="product">
            <h2 class="product__title">{{ $textVariables['main.wm']->{'text_' . App::getLocale()} }}</h2>
            <h6 class="product__text">
                {!! $textVariables['main.wm-desc']->{'text_' . App::getLocale()} !!}
            </h6>
            <h3 class="product__price">1700 €</h3>
            <img src="{{ asset('img/WEDDINGMINI.png')}}" alt="" class="product__img" />
        </div>
        <div class="product ">
            <h6 class="product__text extras">
                {!! $textVariables['main.product']->{'text_' . App::getLocale()} !!}
            </h6>
        </div>
    </section>
@endsection
