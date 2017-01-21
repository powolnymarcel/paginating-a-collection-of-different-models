<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Desk::create([
            'name' => 'Sublimely Magnificent Mario Desk III',
            'color' => 'black',
            'material' => 'wood',
            'description' => 'It is a black desk made of wood.',
            'code' => 'de-blackwood-1'
        ]);

        \App\Desk::create([
            'name' => 'Completely Boring Desk',
            'color' => 'gray',
            'material' => 'metal',
            'description' => 'It is a gray desk made of metal.',
            'code' => 'de-graymetal-1'
        ]);

        \App\Desk::create([
            'name' => 'Banging Desk',
            'color' => 'pink',
            'material' => 'mixed',
            'description' => 'It is a heavy pink desk made with wood and glass.',
            'code' => 'de-pinkmix-1'
        ]);

        \App\Chair::create([
            'name' => 'Kitchen Chair',
            'color' => 'brown',
            'material' => 'wood',
            'description' => 'It is a normal brown chair made of wood.',
            'code' => 'ch-brownwood-1'
        ]);

        \App\Chair::create([
            'name' => 'Rocking Chair',
            'color' => 'Black',
            'material' => 'wood',
            'description' => 'It is a black chair made of wood.',
            'code' => 'ch-blackwood-1'
        ]);

        \App\Chair::create([
            'name' => 'Bar Chair',
            'color' => 'red',
            'material' => 'plastic',
            'description' => 'It is a red chair made of plastic.',
            'code' => 'ch-redplastic-1'
        ]);
    }
}
