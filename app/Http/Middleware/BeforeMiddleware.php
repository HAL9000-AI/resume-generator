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
use Illuminate\Http\Request;


class BeforeMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        //获取request请求参数
        $input = $request->input();
//        dd($input);
        $secure =json_encode($input,true);
        //进行必要参数过滤
        event(new IptEvent($input));
//        return redirect()->to('/api/0.1/users',302,$input);
        return url('/api/0.1/users',$input,$secure);
//        dd($request->fullUrl('/api/0.1/users'));
    }
}