<?php

namespace App\Providers;

use ImageKit\ImageKit;
use League\Flysystem\Filesystem;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use Illuminate\Filesystem\FilesystemAdapter;
use JunaidiAR\ImageKitAdapter\ImageKitAdapter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        Storage::extend('imagekit', function ($app, $config) {
            $adapter = new ImagekitAdapter(
            new ImageKit(
                $config['key'],
                $config['secret'],
                $config['endpoint_url']
            ),
            );

            return new FilesystemAdapter(
                new Filesystem($adapter, $config),
                $adapter,
                $config
            );
    });
    }
}
