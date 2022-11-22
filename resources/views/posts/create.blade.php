<x-site-layout title="New Writup">
    <section class="p-6 dark:text-gray-50">
        <form action="{{route('posts.store')}}" enctype="multipart/form-data"  class="container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid" method="post">
            @csrf
            <div class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-gray-900">
                <div class="space-y-2 col-span-full lg:col-span-1">
                    <h1 class="font-medium">Craete Writeup Post</h1>
                    <h1 class="dark:text-violet-400">Fill all sections of the form to publish your writeup &#128578;!</h1>
                </div>
                <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">

                    <div class="col-span-full sm:col-span-3">
                        <x-post-input name="title" label="Post Title" placeholder=" Exciting title" value="" :errors="$errors"/>
                        <x-post-input name="tag_id" label="Tag ID" placeholder="  " value="" />

                    </div>

                    <div class="col-span-full">
                        <x-post-text-input name="content" label="Blog Post Content" placeholder=" write something ... " value="" :errors="$errors"/>
                    </div>
                    <div class="col-span-full">
                        <x-post-file-input name="image" label="Post Image" />
                    </div>
                </div>
            </div>
            <button type="submit" class="self-center px-8 py-3 text-lg rounded focus:ring hover:ring focus:ring-opacity-75 dark:bg-violet-400 dark:text-gray-900 focus:ring-violet-400 hover:ring-violet-400">Submit</button>
        </form>
    </section>
</x-site-layout>
