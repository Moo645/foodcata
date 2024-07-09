<x-layout>
    <div>

        <div class="mt-5 pb-5 border-b border-white/50">
            <img src="https://fakeimg.pl/1280x600/?text=Banner" alt="">
        </div>

        <div class="mt-5 pb-5 border-b border-white/50">
            <h2 class="text-2xl font-bold">分類</h2>

            <div class="mt-5 flex flex-wrap justify-start">

                @foreach ($categories as $category)
                    <x-category-card>{{ $category->name }}</x-category-card>
                @endforeach
            </div>
        </div>


        <div class="mt-5 pb-5 border-b border-white/50">
            <h2 class="text-2xl font-bold">餐廳</h2>

            <div class="mt-5 flex flex-wrap justify-start">

                @foreach ($restaurants as $restaurant )
                    <x-restaurant-card :$restaurant></x-restaurant-card>
                @endforeach
                
            </div>
        </div>



</x-layout>
