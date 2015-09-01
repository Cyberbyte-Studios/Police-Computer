<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CriminalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criminals')->delete();
        DB::table('crimes')->delete();
        $this->command->info('All data deleted');

        $noah = App\Criminal::create(array(
            'playerID'     => '76561198042394624',
            'name'         => 'Noah'
        ));

        $jim = App\Criminal::create(array(
            'name'         => 'Jim'
        ));

        $matt = App\Criminal::create(array(
            'playerID'     => '76561198103136501',
            'name'         => 'Matt'
        ));

        $this->command->info('Criminals Added');

        App\Crime::create(array(
            'criminal_id'  => $noah->id,
            'crime'        => 'Bank Robbery',
            'description'  => 'Bank was robbed at 12:12 officers responded to find criminal with two hostages',
            'bounty'  => 10000
        ));

        App\Crime::create(array(
            'criminal_id'  => $jim->id,
            'crime'        => 'Speeding',
            'description'  => 'Suspect went 40 in a 30 zone. Details to Follow',
            'bounty'  => 200
        ));

        App\Crime::create(array(
            'criminal_id'  => $matt->id,
            'crime'        => 'Break in',
            'description'  => 'Civ reported house damage and missing keys',
            'bounty'  => 1200,
            'active'       => 0
        ));

        App\Crime::create(array(
            'criminal_id'  => $matt->id,
            'crime'        => 'Break in',
            'description'  => 'Door broken nothing missing',
            'bounty'  => 1200
        ));

        App\Crime::create(array(
            'criminal_id'  => $matt->id,
            'crime'        => 'Small Break in',
            'description'  => 'Car keys where stolen. Suspect is caught on CCTV awaiting analysis',
            'bounty'  => 1500
        ));

        $this->command->info('Crimes Added');
    }
}
