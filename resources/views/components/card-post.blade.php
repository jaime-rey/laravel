<article class="w-full h-72 rounded-t-xl bg-cover bg-center  "
style="background-image: url({{ env('APP_URL') . Storage::url($post->image->url) }})">
<div class="w-full h-full px-8 flex flex-col justify-center">
    <h1 class="text-4xl text-white leading-8 font-bold">
        <a href="{{ route('posts.show', $post) }}">
            {{ $post->name }}
        </a>
    </h1>
    
  
</div>
</article>

<div class="text-gray-700 text-base px-8 mb-8 bg-white shadow-lg rounded-lg">
{{$post->extract}}
<div class="px-3 py-1">
    @foreach ($post->tags as $tag)
        <a href="{{route('posts.tag', $tag)}}"
            class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{ $tag->name }}</a>
    @endforeach
</div>
</div>