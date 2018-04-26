<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\Identification;
use App\User;

class MailController extends Controller
{
    public function ship()
    {

        $id = Auth::id();
        $user = User::find($id);
        $token = $user -> token;
        $email = $user -> email;

        $data = ['id' => $id,
            'token' => $token];

        Mail::send('identification',$data, function($message)use($email) {
            $message->to($email)->subject('SHUPT验证邮件');
            $message->from('shuptmailsender@163.com','SHUPT管理团队');
        });

        //Mail::send('identification','key',)
        //Mail::to('1055335350@qq.com ')->send(new Identification());
        return redirect('emailerror');

    }
}
