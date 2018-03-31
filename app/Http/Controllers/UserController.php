<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OSS;
use Aws\S3\S3Client;

class UserController extends Controller
{

    public function index(){

        //OSS::publicUpload('shupt-picture','sample1','/Users/jackysong/Documents/PHP Storm/SHUPT/.osstest');

        $s3 = new S3Client([
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
        ]);

        return view('home');

    }

    //
}
