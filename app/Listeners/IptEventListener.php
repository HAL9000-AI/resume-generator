<?php
/**
 * Created by PhpStorm.
 * User: hu
 * Date: 17-10-18
 * Time: 下午4:10
 */
namespace App\Listeners;

use App\Events\IptEvent;
use App\Events\ResponseEvent;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
class IptEventListener
{
    public $error=[];
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event
     * @param  IptleEvent  $event
     * @return void
     */
    public function handle(IptEvent $event)
    {
        $input = $event->input;
        $keys = array_keys($input);
        $api_keys = config('custom.api_param');
        $data = $this->filtrating($keys,$api_keys);
        if($this->error){
            return event(new ResponseEvent('response_bad_request',$this->error));
            //写入日子
            Log::info('keys',$this->error);
        }

    }

    /**
     * @param $keys  接口传过来的参数
     * @param $api_keys 配置项定义的必传参数
     * 接口参数过滤
     */
    public function filtrating($keys,$api_keys){
        //过滤是否存在缺少必传参数
        foreach($api_keys as $api_key){
            if(!in_array($api_key,$keys)){
                $this->error['essential'][]=$api_key;
            }
        }
        //过滤是否存在缺非必传参数
        foreach($keys as $key){
            if(!in_array($key,$api_keys)){
                $this->error['spilth'][]=$key;
            }
        }
    }

}
