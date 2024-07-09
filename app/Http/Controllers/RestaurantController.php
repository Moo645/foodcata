<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::with(['categories'])->get();
        $my_restaurants = $restaurants->where('user_id', Auth::id());

        return view('restaurants.index', [
            'restaurants' => $restaurants,
            'my_restaurants' => $my_restaurants
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRestaurantRequest $request)
    {

        $validatedData = $request->validated();
        
        $user_id = Auth::id();

        Restaurant::create([
            'user_id' =>  $user_id,
            'name' => $validatedData['name'],
            'address' => $validatedData['address']
        ]);

        return redirect()->route('restaurants.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        $isOwner = auth()->check() 
                        ? $restaurant->isOwner(auth()->user()) 
                        : null;

        return view('restaurants.show', [
            'restaurant' => $restaurant,
            'isOwner' => $isOwner
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        Gate::authorize('edit', $restaurant);

        return view('restaurants.edit', ['restaurant' => $restaurant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        // 先驗證身分
        Gate::authorize('update', $restaurant);

        // 再驗證的數據
        $validatedData = $request->validated();

        // update to db
        $restaurant->update($validatedData);

        // redirect
        return redirect()->route('restaurants.index')->with('status', 'Restaurant updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        Gate::authorize('destroy', $restaurant);

        return redirect('restaurants.index');
    }
}
