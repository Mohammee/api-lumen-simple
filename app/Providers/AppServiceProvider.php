<?php

namespace App\Providers;

use Illuminate\Notifications\NotificationServiceProvider;
use Illuminate\Support\ServiceProvider;
use Laravel\Tinker\TinkerServiceProvider;
use Spatie\CronlessSchedule\CronlessScheduleServiceProvider;
use Tymon\JWTAuth\Providers\LumenServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(TinkerServiceProvider::class);
        $this->app->register(LumenServiceProvider::class);
        $this->app->register(NotificationServiceProvider::class);
        $this->app->register(\Illuminate\Mail\MailServiceProvider::class);
        $this->app->register(CronlessScheduleServiceProvider::class);

//        $this->app->singleton(\Illuminate\Contracts\Routing\ResponseFactory::class, function() {
//            return new \Laravel\Lumen\Http\ResponseFactory();
//        });
    }
}
