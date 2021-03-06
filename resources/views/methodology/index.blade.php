@extends('layouts.blog')

@section('title', 'Методическая копилка')

@section('content')
    @foreach( $posts as $post)
        <section>
            <header>
                <h3>{{$post->name}}</h3>
            </header>
            <a href="#" class="image feature">
                <img src="/{{$post->icon}}" alt="" />
            </a>
            <p>{{$post->smallText()}}</p>
            <ul class="buttons">
                <li>
                    <a href="{{route('methodology.show',['id'=>$post->id])}}" class="button small">Читать дальше</a>
                </li>
            </ul>
        </section>
        <br><br>
    @endforeach
@endsection