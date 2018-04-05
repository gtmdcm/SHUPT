<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharAuthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $charauth = [
        '0000' => [
            '0000',
            '0001',
        ],

        '0001' => [
            '0000',
            '0001',
            '0002',
            '0003',
            '0005',
            '0006',
        ],

        '0002' => [
            '0000',
            '0001',
            '0002',
            '0003',
            '0004',
            '0005',
            '0006',
            '0007',
            '0008',
        ],
    ];

    public function run()
    {
        foreach($this->charauth as $char => $auth){
            foreach($auth as $a){
                DB::table('charauth')->insert([
                    'cid' => $char,
                    'aid' => $a,
                ]);
            }
        }
    }
}
