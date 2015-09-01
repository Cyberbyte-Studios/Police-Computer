<?php

use Illuminate\Database\Seeder;

class LogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logs')->delete();
        $this->command->info('All data deleted');

        App\Log::create(array(
            'crime_id'  => 1,
            'user_id'        => 1,
            'description'  => 'Dispatched Officer to location'
        ));

        App\Log::create(array(
            'crime_id'  => 1,
            'user_id'        => 1,
            'description'  => 'Officer reported Shots'
        ));

        App\Log::create(array(
            'crime_id'  => 1,
            'user_id'        => 1,
            'description'  => 'Code 99 Dispached'
        ));

        App\Log::create(array(
            'crime_id'  => 1,
            'user_id'        => 1,
            'description'  => '2 Patrol Cars on Scean, Armed Response called'
        ));

        App\Log::create(array(
            'crime_id'  => 1,
            'user_id'        => 1,
            'description'  => 'Armed response Arrived'
        ));

        App\Log::create(array(
            'crime_id'  => 1,
            'user_id'        => 1,
            'description'  => 'Code 4. 2 Officers Down'
        ));

        $this->command->info('Crime 1 Logs Added');

        App\Log::create(array(
            'crime_id'  => 2,
            'user_id'        => 1,
            'description'  => 'Officer Dispatched'
        ));

        App\Log::create(array(
            'crime_id'  => 2,
            'user_id'        => 1,
            'description'  => 'More Officers Dispatched'
        ));

        $this->command->info('Crime 2 Logs Added');
    }
}
