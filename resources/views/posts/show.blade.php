<x-site-layout title="{{$post->title}}">
    <article class="max-w-2xl px-6 py-24 mx-auto space-y-16 dark:text-gray-50">
        <div class="w-full mx-auto space-y-4">
            <div class="flex flex-wrap space-x-2 text-sm dark:text-gray-400">
                <a rel="noopener noreferrer" href="#" class="p-1 hover:underline">{{$post->tag_id}}</a>
            </div>
            <p class="text-sm dark:text-gray-400">by
                <a href="{{route('posts.show', $post->author_id)}}" target="_blank" rel="noopener noreferrer" class="hover:underline dark:text-violet-400">
                    <span>{{$post->author_id}}</span>
                </a>on {{$post->posted_at}}
            </p>
        </div>
        <div class="dark:text-gray-100">
            <p>{{$post->content}}</p>
        </div>
    </article>
</x-site-layout>
