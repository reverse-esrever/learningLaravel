<?php

namespace App\Providers;

use App\AppleMusic;
use App\Music;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;

class MusicServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        dump(1);
        $this->app->bind(Music::class, AppleMusic::class);
    }

    public function provides() : array
    {
        return [Music::class];
    }


}
