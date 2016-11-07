<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Auth;
class IsAdmin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if (session('statut') === 'admin')
		{
			return $next($request);
		}
		$myusernmae = Auth::user()->username;
		$slugme = '/@' . $myusernmae ; 
		return new RedirectResponse(url($slugme));
	}

}
