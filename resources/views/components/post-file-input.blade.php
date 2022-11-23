@props(['name', 'label'])

<label for="{{$name}}" class="block text-sm font-medium">{{$label}}</label>
<input type="file" name="{{$name}}" class="form-control px-8 py-12 border-2 border-dashed rounded-md dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
