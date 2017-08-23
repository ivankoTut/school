@if($post->files->count())

    <span>Файлы по теме</span>
    <ul style="display: block;">
        @foreach($post->files as $file)
            <li style="display: inline-block;
                       margin-right: 10px;
                       border: 1px solid #f3f6fa;
                       padding: 4px 6px;">
                <a href="/{{$file->file}}" title="{{$file->name}}">{{$file->name}}</a>
            </li>
        @endforeach
    </ul>

@endif