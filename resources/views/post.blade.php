<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
        
    <article class="py-2 max-w-180 border-b border-gray-300">
        <h2 class="mb-1 text-4xl tracking-tight font-bold text-gray-900">{{ $article ['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $article ['author'] }}</a> | 
        </div>
        <p class="my-2 font-light">{{ $article['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500"> &laquo; Back to Blog!</a>
    </article>

</x-layout>