<x-site-layout title="{{$post->title}}">
    <article class="max-w-2xl px-6 py-24 mx-auto space-y-16 dark:text-gray-50">
        <div class="w-full mx-auto space-y-4">
            <div class="flex flex-wrap space-x-2 text-sm dark:text-gray-400">
                @foreach($post->tags as $tag)
                    <a rel="noopener noreferrer" href="#" class="p-1 hover:underline">{{$tag->name}}</a>
                @endforeach
            </div>
            <p class="text-sm dark:text-gray-400">by
                <a href="{{route('users.show', $post->author->id)}}" target="_blank" rel="noopener noreferrer" class="hover:underline dark:text-violet-400">
                    <span>{{$post->author->name}}</span>
                </a>on {{$post->posted_at}}
            </p>
            <span><a href="{{route('posts.edit', $post->id)}}" class="hover:underline dark:text-violet-400">Edit</a></span>
        </div>
        <div class="dark:text-gray-100">
            <p>{{$post->content}}</p>
        </div>
    </article>
    <h3 class="text-m font-semibold text-center ">Comments</h3>
    <div class="container flex flex-col w-full max-w-lg p-6 mx-auto divide-y rounded-md divide-gray-700 dark:bg-gray-900 dark:text-gray-100">
        <form method="post" action="/posts/{{$post->id}}/comments" class=" rounded-xl w-full pt-5 space-y-1 dark:text-gray-100">
            @csrf
            <div class="flex">
                <input type="text" name="comment"  placeholder="  your thought about the blog ... " class="flex flex-1 border sm:text-sm focus:ring-inset dark:border-gray-700 dark:text-gray-100 dark:bg-gray-800 focus:ring-violet-400">
                <button type="submit" class="flex items-center px-3 sm:text-sm rounded-r-md dark:bg-gray-700">Comment</button>
            </div>
        </form>

        @foreach($post-> comments as $comment)
        <x-comment :comment="$comment"> </x-comment>
        @endforeach
    </div>
</x-site-layout>
