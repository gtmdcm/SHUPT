<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Services\OSS;
use Aws\S3\S3Client;
use App\Services\S3;


class UserController extends Controller
{

    public function index(){

        //OSS::publicUpload('shupt-picture','sample1','/Users/jackysong/Documents/PHP Storm/SHUPT/.osstest');

        /*$s3 = new S3Client([
            'version' => 'latest',
            'region'  => 'us-east-1',
            'endpoint' => 'http://localhost:9000',
            'use_path_style_endpoint' => true,
            'credentials' => [
                'key'    => '0SDK2DBIRCL31F6DAHZB',
                'secret' => 'fjwSwZZ5hUNjcs78jo0GSYTl4B91rqPif5fbExr6',
            ],
        ]);

        $insert = $s3->putObject([
            'Bucket' => 'shupt-picture',
            'Key'    => 'sample0009',
            'SourceFile'   => '/Users/jackysong/Documents/PHP Storm/SHUPT/.osstest'
        ]);*/

        $s3c = new S3;

        $s3c->putObject('shupt-picture','sample0010','/Users/jackysong/Documents/PHP Storm/SHUPT/.osstest');

        $s3c->getObject('shupt-picture','sample0010','/Users/jackysong/Documents/PHP Storm/SHUPT/.getosstest');

        return view('home');

    }

    public function editProfile(Request $request){
        $id=Auth::id();

        $user=User::find($id);

        $signature=$request->input('signature');

        $school=$request->input('school');

        $gender=$request->input('gender');

        $birthday=$request->input('birthday');

        $user->birthday=$birthday;

        $user->gender=$gender;

        $user->school=$school;

        $user->signature=$signature;

        $user->save();
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }

    //
}
