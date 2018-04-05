<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $characters = [
        'Users' => 'General users',
        'Administrator' => 'Have greater authority than Users',
        'SuperAdmin' => 'Have all authorities',
    ];

    private $count = 0;

    private $id;

    public function run()
    {
        foreach($this->characters as $c => $des){
            $this->id=sprintf("%04d",$this->count);
            DB::table('characters')->insert([
                'cid' => $this->id,
                'character' => $c,
                'description' => $des,
            ]);
            $this->count++;
        }
    }
}
