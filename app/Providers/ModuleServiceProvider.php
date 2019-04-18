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
     * Load modules routes
     *
     * @param string $module
     */
    private function routes(string $module)
    {

        $folder = $this->getFolder($module, $this->routes_folder);
        if (is_dir($folder)) {
            foreach (File::allFiles($folder) as $route) {
                $this->loadRoutesFrom($route->getPathname());
            }
        }
    }

    /**
     * Load all module's migrations from folder
     *
     * @param $module
     */
    private function migrations(string $module)
    {

        $folders = [];

        $folder = $this->getFolder($module, $this->migrations_folder);
        $subs = glob($folder . '/*', GLOB_ONLYDIR);

        if (is_dir($folder)) $folders[] = $folder;
        if (is_array($subs)) $folders = array_merge($folders, $subs);

        $this->loadMigrationsFrom($folders);

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
