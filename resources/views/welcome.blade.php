<x-site-layout title="Writeups">
    @foreach($posts as $post)
        <div class="container max-w-4xl px-10 pt-12 pb-35 py-6 mx-auto rounded-lg shadow-sm dark:bg-gray-900 ">
            <div class="flex items-center justify-between divide-y">
                <span class="text-sm dark:text-gray-400">{{$post->posted_at}}</span>
                <a rel="noopener noreferrer" href="#" class="px-2 py-1 font-bold rounded dark:bg-violet-400 dark:text-gray-900">{{$post->tag_id}}</a>
            </div>
            <div class="mt-3">
                <a rel="noopener noreferrer" href="{{route('posts.show', $post->id)}}" class="text-2xl font-bold hover:underline">{{$post->title}}</a>
                <p class="mt-2">{{ Str::limit($post->content,75)}}</p>
            </div>
            <div class="flex items-center justify-between mt-4">
                <a rel="noopener noreferrer" href="{{route('posts.show', $post->id)}}" class="hover:underline dark:text-violet-400">Read more</a>
                <div>
                    <a rel="noopener noreferrer" href="#" class="flex items-center">
                        <img src="https://source.unsplash.com/50x50/?portrait" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full dark:bg-gray-500">
                        <span class="hover:underline dark:text-gray-400">{{$post->author->name}}</span>
                    </a>
                </div>
            </div>
        </div>

    @endforeach

        <section class="py-6 pt-30 dark:bg-gray-750">
            <div class="container flex flex-col items-center justify-center p-4 mx-auto space-y-8 sm:p-10">
                <h1 class="text-4xl font-bold leading-none text-center sm:text-5xl">Our team</h1>
                <p class="max-w-2xl text-center dark:text-gray-400">At a assumenda quas cum earum ut itaque commodi saepe rem aspernatur quam natus quis nihil quod, hic explicabo doloribus magnam neque, exercitationem eius sunt!</p>
                <div class="flex flex-row flex-wrap-reverse justify-center">
                    @foreach($users as $user)
                    <div class="flex flex-col justify-center m-8 text-center">
                        <img alt="" class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full dark:bg-gray-500" src="https://source.unsplash.com/100x100/?portrait?0">
                        <p class="text-xl font-semibold leading-tight">{{$user->name}}</p>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>













</x-site-layout>
