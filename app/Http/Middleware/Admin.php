<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Alert;
class Admin
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
        if(Auth::check())
        {
            return $next($request);
        }
        Alert::error('Lỗi','Vui lòng đăng nhập để thực hiện chức năng này');
        return redirect()->back();
    }
}
