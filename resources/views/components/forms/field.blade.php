@props(['name', 'label'])

<div>
    @if ($label)        
    <x-forms.label :$name :$label></x-forms.label>
    @endif
    <div class="mt-2">
        {{ $slot }}
    </div>
</div>
