<?php

namespace App;

class MusicService
{
    public function __construct(private Music $musicApp)
    {
        
    }

    public function play(){
        return $this->musicApp->play();
    }
}