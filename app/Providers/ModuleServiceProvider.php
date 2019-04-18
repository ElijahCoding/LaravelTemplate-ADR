<?php

namespace App\Providers;

use File;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    private $module_folder;

    private $route_folder;

    private $migration_folder;

    /**
    * Bootstrap the application services.
    *
    * @return void
    */
    public function register()
    {
        $this->module_folder = config("modules.root", 'Modules');
        $this->route_folder = config('modules.folders.Routes', 'Routes');
        $this->migration_folder = config('folders.Migrations', 'Migrations');

        foreach (config('modules.active', []) as $k => $module) {
            $this->routes($module);
            $this->migrations($module);
        }
    }

    /**
     * Get passed folder path for module
     *
     * @param string $folder
     * @param string $module
     * @return string
     */
    private function getFolder(string $module, string $folder): string
    {
        return app_path(implode(DIRECTORY_SEPARATOR, [$this->modules_folder, $module, $folder]));
    }
}
