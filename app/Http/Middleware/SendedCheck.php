<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\User;


class SendedCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = Auth::id();
        $user = User::find($id);
        $sended = $user -> mailsended;
        $checked = $user -> mailchecked;
        if($sended == 'no')
        {
            $user -> mailsended = 'yes';
            $user -> save();
            return redirect('sendemail');
        }
        if($checked == 'yes')
        {
            return redirect('torrent');
        }
        return $next($request);
    }
}
