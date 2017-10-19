<?php
/**
 * Created by PhpStorm.
 * User: hu
 * Date: 17-10-19
 * Time: 下午9:10
 */
namespace App\Events;

class ResponseEvent extends Event
{

    public  $code =[];
    public  $response =[];
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($code,$data)
    {

        $this->code =$code;
        $this->response=$data;
    }
}
