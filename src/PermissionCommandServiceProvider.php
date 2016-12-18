<?php

namespace Fahmiardi\Permissions\Commands;

use Illuminate\Support\ServiceProvider;

class PermissionCommandServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerConsoleCommands();
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }

    /**
     * Register console commands.
     */
    protected function registerConsoleCommands()
    {
        $this->commands([
            Console\AssignRoleCommand::class,
            Console\CreatePermissionCommand::class,
            Console\CreateRoleCommand::class,
            Console\GivePermissionCommand::class,
        ]);
    }
}