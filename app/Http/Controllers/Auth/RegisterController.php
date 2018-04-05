<?php

namespace App\Http\Controllers\Auth;


use App\User;
use App\Profile;
use App\Document;
use App\Id;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    private $newId;

    private $id;

    private $newUid;

    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $this->newId=Id::find(1);

        $this->id=sprintf("%08d",$this->newId->uid);

        $this->newId->uid=$this->newId->uid+1;

        $this->newId->save();

        $user=new User;
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->password=Hash::make($data['password']);
        $user->uid=$this->id;
        $user->save();

        $this->newId->uid=$this->newId->uid+1;

        $prof=new Profile;
        $prof->uid=$this->id;
        $prof->up=10.0;
        $prof->down=0.0;
        $prof->contribute=0.0;
        $prof->rank=0;
        $prof->register_date=date('Y-m-d H:i:s');
        $prof->last_login=date('Y-m-d H:i:s');
        $prof->last_upload=date('Y-m-d H:i:s');
        $prof->last_download=date('Y-m-d H:i:s');
        $prof->banned='no';
        $prof->character='0000';
        $prof->save();

        $docu=new Document;
        $docu->uid=$this->id;
        $docu->figure='';
        $docu->gender='secret';
        $docu->school='0000';
        $docu->signature='';
        $docu->save();

        //DB::update("update idcontroller set uid = {$this->newId->uid}");
        /*$this->newUid=Id::find(1);
        $this->newUid->uid=$this->newId->uid+1;*/

        return $user;
    }
}
