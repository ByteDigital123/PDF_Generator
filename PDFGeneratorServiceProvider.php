<?php

namespace Bytedigital123\PDFGenerator;

use Illuminate\Support\ServiceProvider;

/**
 * This is the PDFGeneratorServiceProvider class.
 *
 * @author Chris Mills <chris@byte-digital.com>
 */
class PDFGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Templates', 'pdf_views');

        $this->publishes([
            __DIR__ . '/Templates' => resource_path('views/vendor/pdf_generator'),
            __DIR__ . '/Config/pdf_generator.php' => config_path('pdf_generator.php'),
        ], 'pdf_generator');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/Config/pdf_generator.php', 'pdf_generator'
        );
    }
}
