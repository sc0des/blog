@props(['name', 'label'])

<label for="{{$name}}" class="text-sm">{{$label}}</label>
<input type="file" name="{{$name}}" class="form-control">
