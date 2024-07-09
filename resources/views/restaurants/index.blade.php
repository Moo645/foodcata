@php
    // $url = [
    //     'create' => route('restaurants.create'),
    //     'edit' => route('restaurants.edit', ['restaurant' => $restaurant]),
    //     'destory' => route('restaurants.destroy', ['restaurant' => $restaurant]),

    // ];
    $create_url = route('restaurants.create');
    // $edit_url = route('restaurants.edit', ['restaurant' => $restaurant]);
@endphp

<x-layout>
    <x-section-heading>新增餐廳</x-section-heading>
    <div class="mt-5">
        <x-link-button :url="$create_url" >新增餐廳</x-link-button>
    </div>

    <x-section-heading>我的餐廳</x-section-heading>
    <div class="flex flex-wrap justify-start">
        @foreach ($my_restaurants as $restaurant)
            <x-restaurant-card :$restaurant ></x-restaurant-card>
            {{-- <a href="{{ $url['edit'] }}">Edit</a> --}}
        @endforeach

    </div>
    <x-section-heading>餐廳列表</x-section-heading>
    <div class="flex flex-wrap justify-start">
        @foreach ($restaurants as $restaurant)
            <x-restaurant-card :$restaurant></x-restaurant-card>
        @endforeach
    </div>
</x-layout>
