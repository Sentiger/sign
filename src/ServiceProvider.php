<?php

namespace Yiche\Sign;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Sign::class, function () {
            return new Sign(config('services.sassyc.app_key'), config('services.sassyc.app_secret_key'), config('services.sassyc.expire_time'));
        });

        $this->app->alias(Sign::class, 'sign');
    }

    public function provides()
    {
        return [Sign::class, 'sign'];
    }
}