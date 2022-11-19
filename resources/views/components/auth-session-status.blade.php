@props(['status'])

@if ($status)
<div {{ $attributes->merge(['class' => 'text-success border']) }}>
    {{ $status }}
</div>
@endif
