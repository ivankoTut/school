@extends('layouts.single')

@section('title', 'Наши достижения' . $post->name)

@section('theme', $post->name)

@section('content')
    <section>
        <header>
            <h3>{{$post->name}}</h3>
        </header>
        <a href="#" class="image feature">
            <img src="/{{$post->icon}}" alt="" />
        </a>
        @include('.includes.slider')
        <div>
            {!! $post->text !!}
        </div>
        @include('.includes.badge')
    </section>
@endsection