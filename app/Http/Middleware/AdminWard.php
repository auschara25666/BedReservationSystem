<?php

namespace App\Http\Middleware;

use Closure;

class AdminWard
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
        $user = $request->user();
        if ($user && $user->permission_id == 2) {

            return $next($request);
        }

        // echo "<script type='text/javascript'>alert('คุณไม่มีสิทธิ์เข้าหน้านี้');</script>";
        return back()->withErrors('คุณไม่มีสิทธิ์เข้าหน้านี้');
    }
}
