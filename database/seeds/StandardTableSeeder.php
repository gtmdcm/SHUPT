<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StandardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $standards=[
        '1080p',
        '1080i',
        '720p',
        '小于720p',
        '不适用',
        ];

    private $count=0;

    private $id;

    public function run()
    {
        foreach($this->standards as $s){
            $this->id=sprintf("%04d",$this->count);
            DB::table('standard')->insert([
                'standardid' => $this->id,
                'name' => $s,
            ]);
            $this->count++;
        }
    }
}
