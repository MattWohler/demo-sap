<?php

namespace App\Providers;

use GuzzleHttp\Client;
use App\Services\GeoService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Factory as ViewFactory;
use Illuminate\Database\Eloquent\Relations\Relation;
use Containers\Publisher\Containers\Campaign\Models\Campaign;
use Containers\Publisher\Containers\Media\Models\PublisherMedia;
use Containers\Publisher\Containers\Contact\Models\PublisherContact;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'campaign.media'     => Campaign::class,
            'publisher.media'    => PublisherMedia::class,
            'publisher.contacts' => PublisherContact::class,
        ]);

        foreach ($this->app->config['mbs']['containers']['routes'] as $path) {
            $this->loadRoutesFrom($path);
        }

        ViewFactory::macro('component', function ($name, $data = []) {
            return View::make('layouts.metronic', ['name' => $name, 'data' => $data]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(GeoService::class, function ($app) {
            return new GeoService(
                new Client(['base_uri' => $app->config['mbs']['geo']['base_uri']])
            );
        });
    }
}
