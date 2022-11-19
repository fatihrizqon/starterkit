@props(['messages'])

@if ($messages)
<ul {{ $attributes->merge(['class' => 'list-group']) }}>
    @foreach ((array) $messages as $message)
    <li class="list-group-item text-danger fs-6">{{ $message }}</li>
    @endforeach
</ul>
@endif
