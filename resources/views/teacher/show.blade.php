@extends('layouts.single')

@section('title', 'Педагогическая деятельность' . $post->name)

@section('content')
    <section>
        <header>
            <h3>{{$post->name}}</h3>
        </header>
        <a href="#" class="image feature">
            <img src="/{{$post->icon}}" alt="" />
        </a>
        <div>
            {!! $post->text !!}
        </div>
        @include('.includes.badge')
    </section>
@endsection