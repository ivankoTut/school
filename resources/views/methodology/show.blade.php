@extends('layouts.single')

@section('title', 'Методическая копилка - ' . $post->name)

@section('content')
    <section>
        <header>
            <h3>{{$post->name}}</h3>
        </header>
        <a href="#" class="image feature">
            <img src="/{{$post->icon}}" alt="" />
        </a>
        <p>{!! $post->text !!}</p>
    </section>
@endsection