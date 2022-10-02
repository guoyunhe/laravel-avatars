<?php

namespace GuoYunhe\LaravelAvatars\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GuoYunhe\LaravelAvatars\LaravelAvatars
 */
class LaravelAvatars extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \GuoYunhe\LaravelAvatars\LaravelAvatars::class;
    }
}
