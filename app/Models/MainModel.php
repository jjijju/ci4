<?php

namespace App\Models;

use App\Models\CoreModel AS Core;

class MainModel extends CoreModel implements MainModelInterface
{
	public function __construct()
	{
		parent::__construct();

		// config item 호출
	}

	public function getData(string $tableKey, array $searchData = [], int $rowCount = 0, int $startNum = 0)
	{
		$resultObj = $this->_querySharded($tableKey, $rowCount, $startNum);

		return Core::read($resultObj);
	}

	private function _querySharded($tableKey, $rowCount, $startNum)
	{
		$obj = (object) [
			'table' => "",
			'select' => "",
			'options' => []
		];

		if ($tableKey === 'member') {
			$obj->table = TABLE_BILL['admin'];
		}

		return $obj;
	}

	public function insertData()
	{

	}

	public function updateData()
	{
		
	}
}