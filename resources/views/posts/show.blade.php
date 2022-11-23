<x-site-layout title="{{$post->title}}">

    <article class="max-w-2xl px-6 py-24 mx-auto space-y-16 dark:text-gray-50">
        <div class="w-full mx-auto space-y-4">
            <div class="flex flex-wrap space-x-2 text-sm dark:text-gray-400">
                <span class="p-1 hover:underline">Tag : {{$post->tags}}</span>
            </div>
            <p class="text-sm dark:text-gray-400 py-2">by
                <a href="{{route('users.show', $post->author->id)}}" target="_blank" rel="noopener noreferrer" class="hover:underline dark:text-violet-400">
                    <span>{{$post->author->name}}</span>
                </a>on {{$post->posted_at}}
            </p>
        </div>
            <a href="{{route('posts.edit', $post->id)}}" class="text-white bg-green-500 text-gray-300 hover:bg-gray-700 hover:text-white p-1 rounded-md text-sm font-medium">Edit</a>
            <form method="post" action="{{route('posts.destroy', $post->id)}}" class="inline">
                @csrf
                @method('delete')
                <button type="submit" class="text-white bg-red-500 text-gray-300 hover:bg-gray-700 hover:text-white p-1 rounded-md text-sm font-medium">
                    Delete
                </button>
            </form>
        <div class="dark:text-gray-100">
            <img src="{{$post->getFirstMediaUrl('image', 'thumb')}}"  width="120px">
            <p>{{$post->content}}</p>
        </div>
    </article>
    <h3 class="text-m font-semibold text-center ">Comments</h3>
    <div class="container flex flex-col w-full max-w-lg p-6 mx-auto divide-y rounded-md divide-gray-700 dark:bg-gray-900 dark:text-gray-100">
        <form method="post" action="/posts/{{$post->id}}/comments" class=" rounded-xl w-full pt-5 space-y-1 dark:text-gray-100">
            @csrf

            <div class="flex">
                <input type="text" name="comment" id="comment"  placeholder="  " class="flex flex-1 border sm:text-sm focus:ring-inset dark:border-gray-700 dark:text-gray-100 dark:bg-gray-800 focus:ring-violet-400">
                <button type="submit" class="flex items-center px-3 sm:text-sm rounded-r-md dark:bg-gray-700">Comment</button>
            </div>
        </form>

        @error('comment') <span class="text-red-500">{{$errors}}</span> @enderror

        @foreach($post-> comments as $comment)
        <x-comment :comment="$comment"> </x-comment>
        @endforeach
    </div>
</x-site-layout>
