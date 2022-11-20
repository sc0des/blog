<div class="flex justify-between p-4">

    <div class="flex space-x-4">
        <div>
            <img src="https://source.unsplash.com/100x100/?portrait" alt="" class="object-cover w-12 h-12 rounded-full dark:bg-gray-500">
        </div>
        <div>
            <h4 class="font-bold">$comment->author->name</h4>
            <span class="text-xs dark:text-gray-400">comment->created_at</span>
        </div>
    </div>
</div>
<div class="p-4 pt-5 space-y-2 text-sm dark:text-gray-400">
    <p>$comment->author_id->comment</p>
</div>

<fieldset class="w-full pt-5 space-y-1 dark:text-gray-100">
    <label for="url" class="block text-sm font-medium"></label>
    <div class="flex">
        <input type="text" name="url" id="url" placeholder="" class="flex flex-1 border sm:text-sm rounded-l-md focus:ring-inset dark:border-gray-700 dark:text-gray-100 dark:bg-gray-800 focus:ring-violet-400">
        <span class="flex items-center px-3 pointer-events-none sm:text-sm rounded-r-md dark:bg-gray-700">Comment</span>
    </div>
</fieldset>
