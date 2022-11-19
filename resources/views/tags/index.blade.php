<x-site-layout title="Our Tags">
    <div class="p-6 sm:p-12 dark:bg-gray-900 dark:text-gray-100">
        <div class="flex flex-col space-y-4 md:space-y-0 md:space-x-6 md:flex-row">
            <ol class="list-decimal align-centre">
                @foreach($tags as $tag)
                <li class="pt-5">
                        <span>{{$tag->tag }}</span>
                </li>
                @endforeach
            </ol>
        </div>
    </div>
</x-site-layout>


