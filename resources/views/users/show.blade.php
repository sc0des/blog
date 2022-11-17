<x-site-layout title="Profile: {{$user->name}}">
<div class="p-6 sm:p-12 dark:bg-gray-900 dark:text-gray-100">
	<div class="flex flex-col space-y-4 md:space-y-0 md:space-x-6 md:flex-row">
		<img src="https://source.unsplash.com/75x75/?portrait" alt="" class="self-center flex-shrink-0 w-24 h-24 border rounded-full md:justify-self-start dark:bg-gray-500 dark:border-gray-700">
		<div class="flex flex-col">
			<h4 class="text-lg font-semibold text-center md:text-left">{{$user->name}}</h4>
            <p class="dark:text-gray-400 text-lg  text-center md:text-left">{{$user->email}}</p>
        </div>
	</div>
</div>
</x-site-layout>