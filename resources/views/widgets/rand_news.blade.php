<div class="sidebar">
    @foreach($posts as $post)
        <section>
            <header>
                <h3>{{$post->name}}</h3>
            </header>
            <p>{{$post->smallText()}}</p>
            <footer>
                <ul class="buttons">
                    <li>
                        <a href="{{route('teacher.show',['id'=>$post->id])}}"
                           class="button small">Читать дальше</a>
                    </li>
                </ul>
            </footer>
        </section>
    @endforeach
</div>