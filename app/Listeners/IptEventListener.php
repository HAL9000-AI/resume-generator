<?php
/**
 * Created by PhpStorm.
 * User: hu
 * Date: 17-10-18
 * Time: 下午4:10
 */
namespace App\Listeners;

use App\Events\IptEvent;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;
class IptEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  IptleEvent  $event
     * @return void
     */
    public function handle(IptEvent $event)
    {
        
        Log::info('操作成功！！！');
    }
}