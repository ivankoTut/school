<style>
    .gallery{
        display: inline-block;
        margin-right: 10px;
        border: 1px solid #f3f6fa;
        padding: 1.5%;
        width: 22%;
        margin-bottom: 10px;
    }
    .gallery:hover{
        background: #f3f6fa;
    }
</style>
@if($post->slider)
    <span>{{$post->slider->name}}</span>
    <hr>
    @foreach($post->slider->images as $slide)
        <a href="/{{$slide}}" rel="prettyPhoto" class="gallery">
            <img src="/{{$slide}}" alt="" style="max-width: 100%; max-height: 100px;">
        </a>
    @endforeach

@endif