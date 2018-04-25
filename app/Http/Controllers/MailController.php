<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Identification;

class MailController extends Controller
{
    public function ship(Request $request)
    {
        $data = array('name'=>"Virat Gandhi");

        Mail::send('identification', $data, function($message) {
            $message->to('jackjack59@shu.edu.cn')->subject('SHUPT验证邮件');
            $message->from('shuptmailsender@163.com','SHUPT管理团队');
        });

        //Mail::send('identification','key',)
        //Mail::to('1055335350@qq.com ')->send(new Identification());
        return redirect('/');
    }
}
