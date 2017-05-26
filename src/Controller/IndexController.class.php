<?php
namespace ShoufangService\Controller;

public class IndexController{
	public function index(){
		$service = new \ShoufangService\Service\TestService();
		$r = $service->getTestList();
		dump($r);
	}
}
