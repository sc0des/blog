<x-site-layout title="Our Blogs">
    <div>
        <a href="{{route('posts.create')}}" class="px-8 py-3  font-semibold rounded dark:bg-gray-100 dark:text-gray-800 justify-end">+ New Writeup</a>
    </div>
    @foreach($posts as $post)
        <div class="container max-w-4xl px-10 pt-12 pb-4 py-6 mx-auto rounded-lg shadow-sm dark:bg-gray-900 ">
            <div class="flex items-center justify-between divide-y">
                <span class="text-sm dark:text-gray-400">{{$post->posted_at}}</span>
                <a rel="noopener noreferrer" href="#" class="px-2 py-1 font-bold rounded dark:bg-violet-400 dark:text-gray-900">{{$post->tags->pluck('tag')->implode(',')}}</a>
            </div>
            <div class="mt-3">
                <a rel="noopener noreferrer" href="{{route('posts.show', $post->id)}}" class="text-2xl font-bold hover:underline">{{$post->title}}</a>
                <p class="mt-2">{{ Str::limit($post->content,75)}}</p>
            </div>
            <div class="flex items-center justify-between mt-4">
                <a rel="noopener noreferrer" href="{{route('posts.show', $post->id)}}" class="hover:underline dark:text-violet-400">Read more</a>
                <div>
                    <a rel="noopener noreferrer" href="{{route('users.show',$post->author->id)}}" class="flex items-center">
                        <img src="https://source.unsplash.com/50x50/?portrait" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full dark:bg-gray-500">
                        <span class="hover:underline dark:text-gray-400">{{$post->author->name}}</span>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
    <div class="container dark:text-gray-400 max-w-4xl px-10 pt-20 pb-4 py-6 mx-auto rounded-lg shadow-sm dark:bg-gray-900 ">
        {{$posts->links()}}
    </div>

</x-site-layout>


