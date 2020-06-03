<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class userOnlineCheck
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
        if(Auth::check()){
            $expireAt= now()->addMinutes(1);//کاربر یک دقیقه بعد از هر فعالیت خود آنلاین بماند
            Cache::put('user_'.Auth::user()->id , true , $expireAt);//برای این کاربر یک حافظه نهان ساختیم
            //استفاده
            //اگر بعدا آنلاین بودن کاربر را خواستیم چک کنیم
            //کافیه بودن یا نبودن این حافظه نهان را با تابع (cache::has(key چک کنیم

            User::where('id',Auth::user()->id)->update(['last_seen' => (new \DateTime())->format('Y-m-d H:i:s')]);

        }else{
//            Cache::tags('user_online')->forget();
        }
        return $next($request);
    }
}
