<?php


class A{
	public function test(){
		echo "test";
	}
}

$server = new Yar_Server(new A());
$server->handle();