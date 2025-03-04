<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        
    <article class="py-2 max-w-180 border-b border-gray-300">
        <a href="/posts/{{ $post ['slug'] }}"><h2 class="mb-1 text-4xl tracking-tight font-bold text-gray-900">{{ $post ['title'] }}</h2></a>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post ['author'] }}</a> | 
        </div>
        <p class="my-2 font-light">{{Str::limit( $post['body'],150 )}}</p>
        <a href="/posts/{{ $post ['slug'] }}" class="font-medium text-blue-500">Read More! &raquo;</a>
    </article>

    @endforeach
</x-layout>