<?php

class NewsController extends ControllerBase
{
	public function index($name = "")
		{
		echo "NewsController->indexAction " . $name;
	}

	public function test() 
	{
		echo "NewsController->testAction";
	}
}