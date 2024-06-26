<?php

namespace Abdulbaset\ResponseFormatTrait\Providers;

use Illuminate\Support\ServiceProvider;

class ResponseFormatTraitServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load translations
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'response-format-trait');

        // Publish language files
        $this->publishes([
            __DIR__ . '/../lang' => resource_path('lang/vendor/response-format-trait'),
        ], 'lang');

        // Publish config file
        $this->publishes([
            __DIR__ . '/../Config/response-format.php' => config_path('response-format.php'),
        ], 'config');
    }

    public function register()
    {
        // Merge config file
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/response-format.php', 'response-format'
        );
    }
}
