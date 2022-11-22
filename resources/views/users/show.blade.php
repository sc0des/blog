<x-site-layout title="Profile: {{$user->name}}">
    <div class="p-6 sm:p-12 dark:bg-gray-900 dark:text-gray-100">
        <div class="flex flex-col space-y-4 md:space-y-0 md:space-x-6 md:flex-row">
            <img src="https://source.unsplash.com/75x75/?portrait" alt="" class="self-center flex-shrink-0 w-24 h-24 border rounded-full md:justify-self-start dark:bg-gray-500 dark:border-gray-700">
            <div class="flex flex-col">
                <h4 class="text-lg font-semibold text-center md:text-left">{{$user->name}}</h4>
                <p class="dark:text-gray-400 text-lg  text-center md:text-left">{{$user->email}}</p>
            </div>
        </div>
    </div>
    <section class="py-6 sm:py-12">
        <div class="container p-6 mx-auto space-y-8">
            <h1 class=" text-lg font-semibold text-center md:text-left"> Blogs written </h1>
            <div class="grid grid-cols-1 gap-x-4 gap-y-8 md:grid-cols-2 lg:grid-cols-4">
                @foreach($user->posts as $post)
                    <article class="flex flex-col dark:bg-gray-900">
                        <img alt="" class="object-cover w-full h-52 dark:bg-gray-500" src="{{$post->getFirstMediaUrl('image', 'thumb')}}">
                        <div class="flex flex-col flex-1 p-6">
                            <a rel="noopener noreferrer" href="{{route('posts.show', $post->id)}}" aria-label="Te nulla oportere reprimique his dolorum">
                                <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">{{$post->title}}</h3></a>
                            <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs dark:text-gray-400">
                                <span> Published on {{$post->posted_at}}</span>
                                <span> <a href="{{route('posts.edit', $post->id)}}" class="hover:underline dark:text-violet-400">Edit</a></span>
                                <form method="post" action="{{route('posts.destroy', $post->id)}}" class="inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="hover:underline text-red-500">Delete</button>
                                </form>

                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

</x-site-layout>
