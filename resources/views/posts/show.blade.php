<x-site-layout title="{{$post->title}}">
    <article class="max-w-2xl px-6 py-24 mx-auto space-y-16 dark:text-gray-50">
        <div class="w-full mx-auto space-y-4">
            <div class="flex flex-wrap space-x-2 text-sm dark:text-gray-400">
                <a rel="noopener noreferrer" href="#" class="p-1 hover:underline"> $post->tags as $tag $tag->name</a>
            </div>
            <p class="text-sm dark:text-gray-400">by
                <a href="{{route('users.show', $post->author->id)}}" target="_blank" rel="noopener noreferrer" class="hover:underline dark:text-violet-400">
                    <span>{{$post->author->name}}</span>
                </a>on {{$post->posted_at}}
            </p>
        </div>
        <div class="dark:text-gray-100">
            <p>{{$post->content}}</p>
        </div>
    </article>
    <h2 class="text-lg font-semibold text-center ">Comments</h2>
    <div class="container flex flex-col w-full max-w-lg p-6 mx-auto divide-y rounded-md divide-gray-700 dark:bg-gray-900 dark:text-gray-100">
        <div class="flex justify-between p-4">

            <div class="flex space-x-4">
                <div>
                    <img src="https://source.unsplash.com/100x100/?portrait" alt="" class="object-cover w-12 h-12 rounded-full dark:bg-gray-500">
                </div>
                <div>
                    <h4 class="font-bold">$comment->author->name</h4>
                    <span class="text-xs dark:text-gray-400">comment->created_at</span>
                </div>
            </div>
        </div>
        <div class="p-4 pt-5 space-y-2 text-sm dark:text-gray-400">
            <p>$comment->author_id->comment</p>
        </div>

        <fieldset class="w-full pt-5 space-y-1 dark:text-gray-100">
            <label for="url" class="block text-sm font-medium"></label>
            <div class="flex">
                <input type="text" name="url" id="url" placeholder="" class="flex flex-1 border sm:text-sm rounded-l-md focus:ring-inset dark:border-gray-700 dark:text-gray-100 dark:bg-gray-800 focus:ring-violet-400">
                <span class="flex items-center px-3 pointer-events-none sm:text-sm rounded-r-md dark:bg-gray-700">Comment</span>
            </div>
        </fieldset>
    </div>
</x-site-layout>
