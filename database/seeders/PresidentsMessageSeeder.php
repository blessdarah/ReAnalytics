<?php

namespace Database\Seeders;

use App\Models\PresidentsMessage;
use Illuminate\Database\Seeder;

class PresidentsMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PresidentsMessage::create([
            'author' => 'president',
            'body' => '',
            'image' => ''
        ]);
        PresidentsMessage::create([
            'author' => 'rector',
            'body' => '',
            'image' => ''
        ]);
    }
}
