<?php
/**
 * Created by PhpStorm.
 * User: caoqiang
 * Date: 2020/10/23
 * Time: 上午8:51
 */
namespace yar;

class Rpc
{
  public function __construct($class)
  {
    if (!class_exists('Yar_Server')) {
      throw new \Exception("Please install yar extension");
    }

    $server = new \Yar_Server($class);
    $server->handle();
    exit(0);
  }
}