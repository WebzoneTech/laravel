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
            'name'              => 'Admin',
            'email'             => 'admin@larvel.com',
            'password'          => bcrypt('Laravel@2k22'),
        ]);
        $news = User::create([
            'id'                => 2,
            'name'              => 'News Editor',
            'email'             => 'news@larvel.com',
            'password'          => bcrypt('Laravel@2k22'),
        ]);
        $event = User::create([
            'id'                => 3,
            'name'              => 'Event Editor',
            'email'             => 'event@larvel.com',
            'password'          => bcrypt('Laravel@2k22'),
        ]);
        $offer = User::create([
            'id'                => 4,
            'name'              => 'Offer Editor',
            'email'             => 'offer@larvel.com',
            'password'          => bcrypt('Laravel@2k22'),
        ]);
        $business = User::create([
            'id'                => 5,
            'name'              => 'Business Editor',
            'email'             => 'business@larvel.com',
            'password'          => bcrypt('Laravel@2k22'),
        ]);
        $admin->assignRole('Super Admin');
        $news->assignRole('News Editor');
        $event->assignRole('Event Editor');
        $offer->assignRole('Offer Editor');
        $business->assignRole('Business Editor');

        $this->command->info('** Completed Seeding for Users **');
    }
}
