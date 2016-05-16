<?php
	/**
	 * 控制器
	 */
	namespace controller;
	require 'vendor/autoload.php';
	class Test{
		public function test1($req, $res, $args) {
			return \model\user::get(1);
		}
	}

?>