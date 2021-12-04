<x-app-layout>
    <div class="max-w-3xl mx-auto px-2 sm:px-6 lg:px-8 py-8">

        <h1 class="uppercase mb-8 text-center text-3xl font-bold">Etiqueta {{ $tag->name }}</h1>
        @foreach ($posts as $post)
<x-card-post :post=$post></x-card-post>
        
        @endforeach
        <div>
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>