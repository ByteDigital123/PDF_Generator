<?php
/**
 * This file is part of consoletvs/invoices.
 *
 * (c) Chris Mills <chris@byte-digital.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ByteDigital\PDFGenerator;

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
            __DIR__ . '/Templates' => resource_path('views/vendor/pdf_views'),
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
