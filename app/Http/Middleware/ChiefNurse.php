<?php

namespace App\Http\Middleware;

use Closure;
use App\ChiefnurseSchedule;

class ChiefNurse
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

        if ($user && $user->permission_id == 3) {
            return $next($request);
        }
        // } elseif ($user && $user->role == 4) {
        //     if (is_null($user->schedule_id)) {
        //         return back()->withErrors('คุณไม่มีสิทธิ์เข้าหน้านี้');
        //     } else {
        //         $sc = ChiefnurseSchedule::find($user->schedule_id)->first();
        //         if ($sc->date == \Carbon\Carbon::now()->toDateString()) {
        //             return $next($request);
        //         } else {
        //             return back()->withErrors('คุณไม่มีสิทธิ์เข้าหน้านี้');
        //         }
        //     }
        // }

        // echo "<script type='text/javascript'>alert('คุณไม่มีสิทธิ์เข้าหน้านี้');</script>";
        return back()->withErrors('คุณไม่มีสิทธิ์เข้าหน้านี้');
    }
}
