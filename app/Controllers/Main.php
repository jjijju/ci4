<?php namespace App\Controllers;

// use App\Models\MainModel;
use CodeIgniter\Controller;

class Main extends Controller
{
	public function index()
	{
		// $model = new MainModel();

		// $data = [
		// 	'title' => "로그인 사용자",
		// 	'list' => $model->getData('member')
		// ];

		// echo "<xmp>";
		// print_r($data);
		// echo "</xmp>";

		/*
[
					'table' => TABLE_BILL['admin'],
					'select' => 'admin_id, admin_name',
					'options' => [
						'where' => [],
						'order_by' => '',
						'limit' => 1,
						'compile' => 'compile'
					]
				]
		*/

		// print_r($data);

		echo view('main');
	}
}