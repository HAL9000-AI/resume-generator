<?php
/**
 * Created by PhpStorm.
 * User: hu
 * Date: 17-10-19
 * Time: 下午9:15
 */
namespace App\Listeners;

use App\Events\ResponseEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResponseEventListener
{
    public $response =[];
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *返回json数据
     * @param  ExampleEvent  $event
     * @return void
     */
    public function handle(ResponseEvent $event)
    {
        if($event->code){
            $http_code = config('custom.http_code');
            if(array_key_exists($event->code,$http_code)){
                $this->response['code']=$http_code[$event->code];
            }
        }
        if($event->response){
            $this->response['data']=$event->response;
        }
        echo json_encode($this->response,true);
    }
}
