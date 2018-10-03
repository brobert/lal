<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Log;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerHello();
        $this->registerFormatNumber();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    protected function registerHello()
    {
        Blade::directive('hello', function ($expression)
        {
            return "<?php echo 'Hello ' . {$expression}; ?>";
        });
    }

    protected function registerFormatNumber()
    {
           Blade::directive('fnum', function($expression)
        {
            return "<?php echo number_format($expression, '.', ' '); ?>";
        }
        );
    }
}
