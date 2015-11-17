<?php
namespace Cooperl\IBMi;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class IBMiServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // The toolkit manager is used to resolve various connections, since multiple
        // connections might be managed.
        $this->app->bindShared('ts', function($app)
        {
            return new ToolkitServiceManager($app);
        });

        AliasLoader::getInstance()->alias('TS', 'Cooperl\IBMi\Facades\ToolkitService');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

}
