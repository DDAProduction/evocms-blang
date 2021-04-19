<?php namespace EvolutionCMS\EvocmsBlang;

use EvolutionCMS\ServiceProvider;


class EvocmsBlangServiceProvider extends ServiceProvider
{
    protected $namespace = 'Discounts';
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        $this->loadPluginsFrom(
            dirname(__DIR__) . '/assets/plugins/'
        );
    }
}