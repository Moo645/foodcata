@props(['restaurant'])

<div class="mt-3 basis-1/2">
    <div class="flex">
        <div class="basis-1/3">
            <a href="#">
                <img src="https://fakeimg.pl/200x130/?text={{ $restaurant->name }}" alt="">
            </a>
        </div>

        <div class="ml-3 basis-2/3">
            <a href="{{ route('restaurants.show', ['restaurant' => $restaurant->id]) }}" class="text-2xl font-bold">{{ $restaurant->name }}</a>
            
            <p class="mt-1 text-s text-white/50">
                @foreach ($restaurant->categories->pluck('name')->take(3) as $name)
                    {{ $name . " | " }}
                @endforeach
            </p>
            <p class="mt-3 text-xs text-white/50">{{ $restaurant->address }}</p>
        </div>
    </div>
</div>
