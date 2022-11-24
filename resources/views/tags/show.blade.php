<x-site-layout title="{{$tag->name }}">
        <div class="max-w-2xl px-6 py-16 mx-auto space-y-12">
            <div class="space-y-2">
                <h4 class="text-lg font-semibold">Related posts</h4>
                <ul class="ml-4 space-y-1 list-disc">
                    @foreach($tag->posts as $post)
                    <li>
                        <a href="{{route('posts.show', $post['id'])}}" class="pt-10 hover:underline">{{$post['title']}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
</x-site-layout>
