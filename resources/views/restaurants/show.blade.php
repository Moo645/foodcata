@php
    $url = [
        'edit' => route('restaurants.edit', ['restaurant' => $restaurant]),
        'destroy' => route('restaurants.destroy', ['restaurant' => $restaurant])
    ]
@endphp

<x-layout>
    @if ($isOwner)
    <x-section-heading>管理餐廳</x-section-heading>

    <div class="my-5">
        <x-link-button :url="$url['edit']">編輯餐廳</x-link-button>
        <x-link-button url="$url['destory']">刪除</x-link-button>
    </div>

    @endif

    <x-section-heading>餐廳資料</x-section-heading>
    
    <div class="my-5">
        <div>名稱: {{ $restaurant->name }}</div>
        <div>地址: {{ $restaurant->address }}</div>
    </div>
    
</x-layout>
