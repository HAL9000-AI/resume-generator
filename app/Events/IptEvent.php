<?php
/**
 * Created by PhpStorm.
 * User: hu
 * Date: 17-10-18
 * Time: 下午3:48
 * Interface parameter test
 */

namespace App\Events;

class IptEvent extends Event
{
    //请求参数
    public $input =[];

    public function __construct($input)
    {
        $this->input =$input;
    }


}