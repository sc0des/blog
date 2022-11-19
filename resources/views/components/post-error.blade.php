@props(['name', 'errors'])

@error($name)
    @foreach($errors->get($name) as $error)
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
        {{$error}}
        </span>
    @endforeach
@enderror
