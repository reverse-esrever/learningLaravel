<?php

namespace App;

use Closure;
use Illuminate\Support\Facades\Pipeline;

class MusicService
{
    public function __construct(private Music $musicApp) {}

    public function play()
    {
        return $this->musicApp->play();
    }

    public function pipe()
    {
        $test = 0;
        $music = Pipeline::send($test)
            ->through([
                function (int $test, Closure $next) {
                    // ...
                    $test++;
                    return $next($test);
                },
                function (int $test, Closure $next) {
                    // ...
                    
                    $test++;
                    return $next($test);
                },
            ])
            ->then(fn(int $test) => $test);
        dd($music);
        return 'pipe';
    }
}
