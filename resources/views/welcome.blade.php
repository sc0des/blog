<x-site-layout title="Writeups">
    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <div>{{ $post->content }}</div>
    @endforeach
</x-site-layout>