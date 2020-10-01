<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('** Started Seeding for Users **');
        
        $admin = User::create([
            'id'                => 1,
            'name'              => 'Administrator',
            'email'             => 'admin@stalza.com',
            'password'          => bcrypt('password'),
        ]);
        $admin->assignRole('Super Admin');

        $this->command->info('** Completed Seeding for Users **');
    }
}
