<?php

class IndexController extends ControllerBase
{
	public function index()
	{
		echo "Index Action";

		// views/index.php
		$this->render('index', [

		]);
	}
}