<?php

namespace App\Providers;

use File;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    private $module_folder;

    private $route_folder;

    private $migration_folder;

    public function register()
    {
        $this->module_folder = config("modules.root", 'Modules');
        $this->route_folder = config('modules.folders.Routes', 'Routes');
        $this->migration_folder = config('folders.Migrations', 'Migrations');

        foreach (config('modules.active', []) as $key => $module) {
            $this->routes($module);
            $this->migrations($module);
        }
    }

    private function routes(string $module)
    {
        $folder = $this->getFolder($module, $this->route_folder);
        if (is_dir($folder)) {
            foreach (File::allFiles($folder) as $route) {
                $this->loadRoutesFrom($route->getPathname());
            }
        }
    }

    protected function migrations(string $module)
    {
        $folders = [];

        $folder = $this->getFolder($module, $this->migration_folder);
        $subs = glob($folder . '/*', GLOB_ONLYDIR);

        if (is_dir($folder)) $folders[] = $folder;
        if (is_array($subs)) $folders = array_merge($folders, $subs);

        $this->loadMigrationsFrom($folders);

    }

    private function getFolder(string $module, string $folder): string
    {
        return app_path(implode(DIRECTORY_SEPARATOR, [$this->module_folder, $module, $folder]));
    }
}
