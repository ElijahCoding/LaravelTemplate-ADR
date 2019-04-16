<?php

namespace Tests\Unit\Models\User\Permission;

use Tests\TestCase;
use App\Models\Permissions\{Domain, Module};

class ModuleTest extends TestCase
{
    public function test_it_belongs_to_many_domains()
    {
        $module = create(Module::class);

        $module->domains()->attach(
            $domain = create(Domain::class)
        );

        $this->assertDatabaseHas('domain_module', [
            'domain_id' => $domain->id,
            'module_id' => $module->id
        ]);
    }
}
