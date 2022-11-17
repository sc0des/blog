<x-site-layout title="Writers">
    <ul>    
        @foreach($users as $user)
        <li><span>{{ $user->name }}</span></li>
        @endforeach
    </ul>

</x-site-layout>