<x-site-layout title="Our Tags">
    <div class="p-6 sm:p-12 dark:bg-gray-900 dark:text-gray-100">
        <div class="flex flex-col space-y-4 md:space-y-0 md:space-x-6 md:flex-row">
                @foreach($tags as $tag)
                <button class="px-8 py-3 font-semibold rounded-full dark:bg-gray-100 dark:text-gray-800">
                        <span>{{$tag->tag }}</span>
                </button>
                @endforeach
        </div>
    </div>
</x-site-layout>


