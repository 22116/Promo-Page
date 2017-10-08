<?php

namespace App\Http\Middleware;

use Closure;

class University
{
	private $lessons = ['probabilitytheory', 'programming'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    	if (
    		!in_array(strtolower($request->lesson), $this->lessons) && isset($request->lesson) ||
		    !is_numeric($request->number) && isset($request->number)
	    ) {
		    abort(404);
	    }

        return $next($request);
    }
}
