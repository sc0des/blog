<x-site-layout title="Writeups">
    <div class="container flex flex-col items-center justify-center p-4 mx-auto space-y-8 sm:p-10">
        <h2 class="text-3xl font-bold leading-none  sm:text-4xl">Latest Posts</h2>
    </div>

    @foreach($posts as $post)
        <div class="container max-w-4xl px-10 pt-12 pb-35 py-6 mx-auto rounded-lg shadow-sm dark:bg-gray-900 ">
            <div class="flex items-center justify-between divide-y">
                <span class="text-sm dark:text-gray-400">{{$post->posted_at}}</span>
                <a rel="noopener noreferrer" href="#" class="px-2 py-1 font-bold rounded dark:bg-violet-400 dark:text-gray-900">{{$post->tag_id}}</a>
            </div>
            <div class="mt-3">
                <a rel="noopener noreferrer" href="{{route('posts.show', $post->id)}}" class="text-2xl font-bold hover:underline">{{$post->title}}</a>
                <img alt="" class="object-cover w-full h-52 dark:bg-gray-500" src="{{$post->getFirstMediaUrl('image', 'thumb')}}">
                <p class="mt-2">{{ Str::limit($post->content,75)}}</p>
            </div>
            <div class="flex items-center justify-between mt-4">
                <a rel="noopener noreferrer" href="{{route('posts.show', $post->id)}}" class="hover:underline dark:text-violet-400">Read more</a>
                <div>
                    <a rel="noopener noreferrer" href="{{route('users.show', $post->author->id)}}" class="flex items-center">
                        <img src="https://i.pravatar.cc/150?u={{$post->author->id}}"  class="object-cover w-10 h-10 mx-4 rounded-full dark:bg-gray-500">
                        <span class="hover:underline dark:text-gray-400">{{$post->author->name}}</span>
                    </a>
                </div>
            </div>
        </div>

    @endforeach

        <section class="py-40 pt-40 dark:bg-gray-750">
            <div class="container flex flex-col items-center justify-center p-4 mx-auto space-y-8 sm:p-10">
                <h1 class="text-4xl font-bold leading-none text-center sm:text-5xl">Our Writers</h1>
                <p class="max-w-2xl text-center dark:text-gray-400">Here are Top 3 Writers. Who knows, one of these writers might become your new favorite. Check out !</p>
                <div class="flex flex-row flex-wrap-reverse justify-center">
                    @foreach($users as $user)
                    <div class="flex flex-col justify-center m-8 text-center">
                        <img alt="" class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full dark:bg-gray-500" src="https://i.pravatar.cc/150?u={{$user->id}}">
                        <a rel="noopener noreferrer" href="{{route('users.show', $user->id)}}" class="flex hover:underline items-center "><p class="text-xl font-semibold leading-tight">{{$user->name}}</p></a>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>

    <section class="py-40 pt-40 dark:bg-gray-750">
        <form novalidate="" class="container w-full max-w-xl p-10 mx-auto space-y-6 rounded-md shadow dark:bg-gray-900 ng-untouched ng-pristine ng-valid">
            <h2 class="text-2xl font-bold leading-none text-center sm:text-4xl ">Sign up to get latest posts updates</h2>
            <div>
                <input id="name" type="text" placeholder="Your name" required="" class="block w-full p-2 rounded focus:outline-none focus:ring focus:ring-opacity-25 focus:ring-violet-400 dark:bg-gray-800">
            </div>
            <div>
                <input id="email" type="email" placeholder="Your email" required="" class="block w-full p-2 rounded focus:outline-none focus:ring focus:ring-opacity-25 focus:ring-violet-400 dark:bg-gray-800">
            </div>
            <div>
                <button type="submit" class="w-full px-4 py-2 font-bold rounded shadow focus:outline-none focus:ring hover:ring focus:ring-opacity-50 dark:bg-violet-400 focus:ring-violet-400 hover:ring-violet-400 dark:text-gray-900">Send</button>
            </div>
        </form>
    </section>
</x-site-layout>
