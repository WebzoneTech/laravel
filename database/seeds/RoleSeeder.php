<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('** Started Seeding for Roles **');
        
        Role::create([
            'name'              => 'Super Admin',
            'guard_name'        => 'web',
        ]);

        Role::create([
            'name'              => 'News Editor',
            'guard_name'        => 'web',
        ]);

        Role::create([
            'name'              => 'Event Editor',
            'guard_name'        => 'web',
        ]);

        Role::create([
            'name'              => 'Offer Editor',
            'guard_name'        => 'web',
        ]);

        Role::create([
            'name'              => 'Business Editor',
            'guard_name'        => 'web',
        ]);

        $this->command->info('** Completed Seeding for Roles **');
    }
}
