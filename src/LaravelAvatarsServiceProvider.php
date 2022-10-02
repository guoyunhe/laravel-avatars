<?php

namespace GuoYunhe\LaravelAvatars;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use GuoYunhe\LaravelAvatars\Commands\LaravelAvatarsCommand;

class LaravelAvatarsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-avatars')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-avatars_table')
            ->hasCommand(LaravelAvatarsCommand::class);
    }
}
