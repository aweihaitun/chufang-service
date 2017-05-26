<?php
namespace ShoufangService\Service;

public class TestService{
	public function getTestList(){
		$model = new \ShoufangService\Model\TestModel();
		return $model->getList();
	}
}
