@props(['name', 'errors','label','placeholder','value'])

    <label for="{{$name}}" class="text-sm">{{$label}}</label>
    <input name="{{$name}}" type="text" value="{{ old($name, $value)  }}" placeholder="{{$placeholder}}" class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:border-gray-700 dark:text-gray-900">
    <x-post-error name="{{$name}}" :errors="$errors"/>

