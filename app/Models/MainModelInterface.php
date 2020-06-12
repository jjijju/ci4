<?php

namespace App\Models;

interface MainModelInterface
{
	public function getData(string $tableKey, array $searchData = [], int $rowCount = 0, int $startNum = 0);
}