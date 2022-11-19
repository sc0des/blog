<x-site-layout title="New Writup">
    <section class="p-6 dark:text-gray-50">
        <form action="{{route('posts.store')}}" class="container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid" method="post">
            @csrf
            <div class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-gray-900">
                <div class="space-y-2 col-span-full lg:col-span-1">
                    <p class="font-medium">Craete Writeup Post</p>
                    <p class="text-xs">Fill all sections of the form to publish your writups!</p>
                </div>
                <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
                    <div class="col-span-full sm:col-span-3">
                        <label for="title" class="text-sm">Title*</label>
                        <input name="title" type="text" placeholder="" class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:border-gray-700 dark:text-gray-900">
                    </div>
                    <div class="col-span-full">
                        <label for="content" class="text-sm">Content*</label>
                        <textarea name="content" placeholder=" write something ... " class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:border-gray-700 dark:text-gray-900"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="self-center px-8 py-3 text-lg rounded focus:ring hover:ring focus:ring-opacity-75 dark:bg-violet-400 dark:text-gray-900 focus:ring-violet-400 hover:ring-violet-400">Submit</button>
        </form>
    </section>
</x-site-layout>
