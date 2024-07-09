<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class RestaurantCreatedLogging implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $restaurant;

    /**
     * Create a new job instance.
     */
    public function __construct($restaurant)
    {
        $this->restaurant = $restaurant;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // do something: logging, send email... etc
        sleep(5);

        Log::channel('restaurant_jobs')->info('Processing Restaurant Created', [
            'restaurant_id' => $this->restaurant->id,
            'restaurant_name' => $this->restaurant->name,
            'restaurant_user_id' => $this->restaurant->user_id,
        ]);
        
        echo 'Restaurant has been created!';
    }
}
