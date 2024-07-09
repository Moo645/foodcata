@php
    $url = [
        'edit' => route('restaurants.edit', ['restaurant' => $restaurant]),
        'destroy' => route('restaurants.destroy', ['restaurant' => $restaurant])
    ]
@endphp

<x-layout>
    @if ($isOwner)
    <x-section-heading>管理餐廳</x-section-heading>
        <x-link-button :url="$url['edit']">編輯餐廳</x-link-button>
        <x-link-button url="$url['destory']">刪除</x-link-button>
    <x-section-heading>管理餐點</x-section-heading>
    @endif

    
</x-layout>
