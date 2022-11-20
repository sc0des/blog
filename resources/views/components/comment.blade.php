@props(['comment'])

<div class="flex justify-between p-4">
    <div class="flex space-x-4 pt-10 ">
        <div>
            <img src="https://i.pravatar.cc/150?u={{$comment->id}}" alt="" class="object-cover w-12 h-12 rounded-full dark:bg-gray-500">
        </div>
        <div>
            <h4 class="font-bold">{{$comment->author->name}}</h4>
            <span class="text-xs dark:text-gray-400">{{$comment->created_at->format('j M, Y, g:i a')}}</span>
        </div>
    </div>
</div>
<div class="p-4 pt-5 space-y-2 text-sm dark:text-gray-400">
    <p>{{$comment->comment}}</p>
</div>

