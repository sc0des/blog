<x-site-layout title="Our Tags">
    <div class="container mx-auto  items-center justify-center p-4 space-y-8 md:p-10 md:px-24 xl:px-48">
                <h2 class="text-4xl font-bold leading-none text-center">Popular Topics</h2>
                @foreach($tags as $tag)
                <button class="px-8 py-3 font-semibold rounded-full dark:bg-gray-100 dark:text-gray-800">
                        <span>{{$tag->tag }}</span>
                </button>
                @endforeach
        </div>
</x-site-layout>
