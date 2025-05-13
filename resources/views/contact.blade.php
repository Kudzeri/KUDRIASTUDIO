@extends('layouts.app')
@section('content')
    @php
        use Illuminate\Support\Facades\App;
    @endphp
    <section class="title">
        <h2>{{ $textVariables['main.title-contact']->{'text_' . App::getLocale()} }}</h2>
    </section>
    <section class="contact">
        <div class="contact__img">
            <img src="{{ asset('img/contact.jpg')}}" alt="" />
        </div>
        <p class="contact__text">
            {!! $textVariables['main.contact-desc']->{'text_' . App::getLocale()} !!}
        </p>
        <p class="contact__names"></p>
    </section>
    <section class="title">
        <h1>{{ $textVariables['main.form']->{'text_' . App::getLocale()} }}</h1>
    </section>
    <form class="form" action="{{route('contact.store', ['locale' => session()->get('language') ?? 'en'])}}" method="post">
        @if (session()->has('msg'))
            <div class="form__group" style="text-align: center; font-weight: 700;">
               <p>{{ session()->get('msg') }}</p>
            </div>
            @else
            <div class="form__group">
                <label>{{ $textVariables['main.form-name']->{'text_' . App::getLocale()} }}</label>
                <input type="text" name="name" required />
            </div>
            <div class="form__group">
                <label>{{ $textVariables['main.form-phone']->{'text_' . App::getLocale()} }}</label>
                <input type="phone" name="phone"  required/>
            </div>
            <div class="form__group">
                <label>{{ $textVariables['main.form-social']->{'text_' . App::getLocale()} }}</label>
                <input type="text" name="social" required />
            </div>
            <div class="form__group">
                <button type="submit">{{ $textVariables['main.form-send']->{'text_' . App::getLocale()} }}</button>
            </div>
        @endif
        @csrf

    </form>
@endsection
