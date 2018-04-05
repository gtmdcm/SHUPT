<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $auths = [
        'Download' => 'Be able to download resources',
        'Upload' => 'Be able to upload resources',
        'ModifyResource' => 'Be able to modify the information of resources',
        'BanResource' => 'Be able to ban any resource',
        'CheckResource' => 'Be able to check a new resource whether it could be published or not',
        'ModifyUser' => 'Be able to modify the information of users',
        'ModifyAuth' => 'Be able to modify the authority of users',
        'BanUpload' => 'Be able to ban the authority to upload of a user',
        'Background' => 'Be able to access the background page',
    ];

    private $count=0;

    private $id;

    public function run()
    {
        foreach($this->auths as $a => $des){
            $this->id=sprintf("%04d",$this->count);
            DB::table('auths')->insert([
                'aid' => $this->id,
                'auth' =>$a,
                'description' => $des,
            ]);
            $this->count++;
        }
    }
}
