<?php
/**
 * Created by PhpStorm.
 * User: hu
 * Date: 17-10-18
 * Time: 下午1:31
 */

return [
   //接口必传参数
        'api_param'=>[
        'api', //appID
        'version',//'版本号'
        'parms', //具体接口需要参数，把所需要参数存成json串放在此键中
        'time',//时间
        'access_key'//访问秘钥
    ],
    'api_version' =>'0.1',
    //自定义的一个秘钥字符串
    'secret_key'=>'2wNAyMHZxpZCa5gS1c4OoVphinBZQrw1',
    //接口自定义状态码
    'http_code'=>[
        'response_success'=>'200',//成功
        'response_bad_request'=>'400',//禁止访问
        'response_forbidden'=>'403',//禁止访问
        'response_not_found'=>'404',//未找到
        'response_not_allowed'=>'405',//不合法请求
    ]

];