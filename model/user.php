<?php
	namespace model;
		require 'vendor/autoload.php';
	// include_once("model.php");
	// require_once './medoo.php';

	class user {
		static function get($id) {
			$DB = new \medoo([
			 // 必须配置项
		    'database_type' => 'mysql',
		    'database_name' => 'pizzaCms',
		    'server' => '192.168.1.117',
		    'username' => 'root',
		    'password' => 'huabinglan@@227',
		    'charset' => 'utf8',
		    'port' => 3306
		   ]);

			$data = $DB->select("pz_user", "*", [
				'id'=>1
			]);
			return json_encode($data);
		}
	}
?>