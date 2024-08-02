<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Closure;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()) {
            if(Auth::user()->role == 'admin'){
                return $next($request);
            }elseif(Auth::user()->role == 'user'){
                return redirect()->route('users.index', auth()->user()->username);
            }else{
                return redirect()->route('home');
            }
        }
        // return $next($request);
        return redirect()->route('login');
    }
}
