<?php
namespace App\Http\Controllers\Api;
/**
 * Created by PhpStorm.
 * User: hu
 * Date: 17-10-18
 * Time: 下午5:18
 */
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\IptEvent;
class IndexController extends Controller{

    public function index(Request $request){

        $data = $request->secure();
        dd($request);
    }
}