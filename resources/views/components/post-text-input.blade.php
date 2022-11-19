@props(['name', 'errors','label','placeholder','value'])

    <label for="{{$name}}" class="text-sm">{{$label}}</label>
    <textarea name="{{$name}}"  value="{{ old($name, $value)  }}" placeholder="{{$placeholder}}" required class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:border-gray-700 dark:text-gray-900">
    </textarea>
    <x-post-error name="{{$name}}" :errors="$errors" />
