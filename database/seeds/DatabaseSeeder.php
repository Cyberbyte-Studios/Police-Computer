<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->command->info('Staring seeding of Criminals and Crimes.');
        $this->call(CriminalTableSeeder::class);

        $this->command->info('Staring seeding of Logs.');
        $this->call(LogTableSeeder::class);

        Model::reguard();
        $this->command->info('Seeding finished and guarding enabled.');
    }
    
}
