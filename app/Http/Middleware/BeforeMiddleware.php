<?php
/**
 * Created by PhpStorm.
 * User: hu
 * Date: 17-10-18
 * Time: 下午2:41
 */

namespace App\Http\Middleware;

use Closure;
use App\Events\IptEvent;
class BeforeMiddleware
{
    public function handle($request, Closure $next)
    {


        $input = $request->input();
        event(new IptEvent($input));
            return $next($request);
    }
}