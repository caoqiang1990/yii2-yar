<?php


class Rpc
{
  public function __construct()
  {
    if (class_exists('Yar_Server')) {
      throw new Exception('Error');
    }
  }


}
