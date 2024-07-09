@props(['name', 'label'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => "block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6",
        'value' => old($name)
    ];
@endphp
<div>
    <x-forms.field :$label :$name>
        <input {{ $attributes($defaults) }}>
    </x-forms.field>
</div>
