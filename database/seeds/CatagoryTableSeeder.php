<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatagoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $catafirst = [
        '0001' => '电影',
        '0002' => '动漫',
        '0003' => '电视剧',
        '0004' => '纪录片',
    ];

    private $catasecond = [
        //
    ];

    private $count=0;

    private $id;

    public function run()
    {
        foreach($this->catafirst as $c){
            $this->id=sprintf("%04d",$this->count);
            DB::table('catagory')->insert([
               'cataid' => $this->id,
                'name' => $c,
            ]);
            $this->count++;
        }
    }
}
