<x-site-layout title="Our Tags">
    <div class="container mx-auto  items-center justify-center p-4 space-y-8 md:p-10 md:px-24 xl:px-48">
                <h2 class="text-4xl font-bold leading-none text-center">Popular Topics</h2>
                <div class="flex flex-wrap py-6 space-x-2 border-t border-dashed dark:border-gray-400">
                    @foreach($tags as $tag)
                        <a href="{{route('tags.show', $tag->id)}}" class="px-3 py-1 rounded-sm hover:underline dark:bg-violet-400 dark:text-gray-900">
                            # {{$tag->name}}
                        </a>
                    @endforeach
                </div>

        </div>
</x-site-layout>


