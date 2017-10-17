<?php

namespace App\Http\Middleware;

use App\Models\University\Mappers\LessonMapper;
use App\Models\University\Storages\LabStorage;
use App\Models\University\Storages\LessonStorage;
use Closure;

class University
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
	    $lessonMapper = new LessonMapper(new LessonStorage(), new LabStorage());
	    $lessons = $lessonMapper->serialize();

	    if(isset($request->lesson)) {
		    foreach ($lessons as $lesson => $labs) {
			    if (strtolower($request->lesson) == $lesson) {
			    	if(isset($request->number)) {
					    foreach ($labs as $lab) {
							if ($request->number == $lab) {
								return $next($request);
							}
					    }
				    }
				    else {
			    		return $next($request);
				    }
			    }
		    }
		    abort(404);
	    }

        return $next($request);
    }
}
