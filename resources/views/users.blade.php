<x-site-layout title="Our Writers">
    <div class="p-6 sm:p-12 dark:bg-gray-900 dark:text-gray-100">
        <div class="flex flex-col space-y-4 md:space-y-0 md:space-x-6 md:flex-row">
            <ol class="list-decimal align-centre">    
                @foreach($users as $user)
                <li class="pt-5">
                    <a href="{{route('users.show', $user->id)}}">
                        <span>{{ $user->name }}</span>
                    </a>
                </li> 
                @endforeach
            </ol>
        </div>
    </div>
</x-site-layout>


