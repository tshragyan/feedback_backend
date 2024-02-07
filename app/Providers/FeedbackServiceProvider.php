<?php

namespace App\Providers;

use App\Services\FeedbackService;
use Illuminate\Support\ServiceProvider;

class FeedbackServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('feedbackService', function () {
            return new FeedbackService();
        });
    }
}
