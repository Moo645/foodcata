<div class="mt-5 mx-3 basis-1/6 bg-white/50 rounded-lg overflow-hidden">
    <div class="flex justify-between rounded-md">
        
        <div class="ml-3 basis-1/2">
            <p class="text-lg font-bold">{{ $slot }}</p>
        </div>

        <div class="basic-1/2">
            <img src="https://fakeimg.pl/70x70/?text={{ $slot }}" alt="">
        </div>
    </div>
</div>
