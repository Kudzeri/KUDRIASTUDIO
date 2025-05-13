@extends('layouts.app')
@section('content')
    <section class="title">
        <h1>{!! $post->title !!}</h1>
    </section>
    <section class="single-post">
        <div class="single-post__content">
            {!! $post->content !!}
        </div>
    </section>
    <section class="title title-recommendations" >
        <p>{{__('main.recommendations')}}</p>
    </section>
    <section class="recommendations">
        @foreach($posts as $postRec)
            <a class="recommendation-post post"
               href="{{route('post.show', ['post' => $postRec->id, 'slug' => $postRec->slug,'locale' => session()->get('language') ?? 'en'])}}">
                <div style="display: flex; justify-content: space-between">
                    <p>{{$postRec->title}}</p>
                    <i class="fa-solid fa-arrow-left right"></i>
                </div>
                <img src="{{ asset('storage/' . $postRec->img)}}" alt=""/>
            </a>
        @endforeach
    </section>
@endsection
