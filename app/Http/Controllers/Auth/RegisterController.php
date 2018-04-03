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


        /*$prof=new Profile;
        $prof->user=$data['name'];
        //$prof->figure='';
        $prof->up_quant=10.0;
        $prof->down_quant=0.0;
        $prof->contribute=0.0;
        $prof->rank=0;
        $prof->authority=0;
        $prof->save();


        $docu=new Document;
        $docu->user=$data['name'];
        $docu->nick_name='';
        $docu->figure='';
        $docu->gender=0;
        $docu->age=0;
        $docu->birthday='';
        $docu->city='';
        $docu->email='';
        $docu->qq='';
        $docu->tel='';
        $docu->self_introduce='';
        $docu->save();*/

        $this->newId=Id::find(1);

        $this->id=sprintf("%08d",$this->newId->uid);

        $user=new User;
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->password=Hash::make($data['password']);
        $user->uid=$this->id;
        $user->save();

        $this->newId->uid=$this->newId->uid+1;

        DB::update("update idcontroller set uid = {$this->newId->uid}");
        /*$this->newUid=Id::find(1);
        $this->newUid->uid=$this->newId->uid+1;*/

        return $user;
    }
}
