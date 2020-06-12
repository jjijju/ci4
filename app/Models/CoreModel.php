<?php

namespace App\Models;

use CodeIgniter\Model;

class CoreModel extends Model implements CoreModelInterface
{
	protected $DBGroup = COUNTRY_CODE."_".ENVIRONMENT;

	protected static $build;

	public static function read(object $obj)
	{
		return $obj;
	}

	/**
	 * 쿼리 빌더를 기반으로 데이터 조회
	 *
	 * @param string $table
	 * @param string $select
	 * @param array $options
	 * @return void
	 */
	// public function read(string $table, string $select, array $options)
	// {
	// 	static::$build = $this->db->table($table);

	// 	$this->_select($select);
		
	// 	// if ($options !== null && count($options) !== 0 && is_array($options)) {
	// 		$this->_where($options['where']);

	// 		$this->_orderBy($options['order_by']);

	// 		static::$build->limit($options['limit']);

	// 		// $this->_limit($options['limit']);

	// 		return $this->_resultOption($options['compile']);
	// 	// }

		
	// }

	// /**
	//  * select 문
	//  *
	//  * @param string $select
	//  * @return void
	//  */
	// private function _select(string $select = '*')
	// {
	// 	if ($select === null || !is_string($select)) {
	// 		$select = '*';
	// 	}

	// 	static::$build->select($select);

	// 	return;
	// }

	// /**
	//  * where 문
	//  *
	//  * @param string or array $where
	//  * @return void
	//  */
	// private function _where($where)
	// {
	// 	if (!empty($where) && $where) {
	// 		static::$build->where($where);
	// 	}

	// 	return;
	// }

	// /**
	//  * order by 문
	//  *
	//  * @param string $order_by
	//  * @return void
	//  */
	// private function _orderBy(string $order_by)
	// {
	// 	if (!empty($order_by) && $order_by) {
	// 		static::$build->orderBy($order_by);
	// 	}

	// 	return;
	// }

	// /**
	//  * limit 문
	//  *
	//  * @param integer $limit
	//  * @return void
	//  */
	// private function _limit()
	// {
	// 	// if (!empty($limit) && $limit) {
	// 	// 	$flag = (strpos($limit, ','));

	// 	// 	if ($flag) {
				
	// 	// 	} else {
	// 	// 		static::$build->limit($limit);
	// 	// 	}
	// 	// }


		



	// 	// if ($offset === null && !empty($limit) && $limit) {
	// 	// 	
	// 	// } else {
	// 	// 	static::$build->limit($limit, $offset);
	// 	// }

	// 	// return;
	// }

	// /**
	//  * 설정된 결과물로 리턴
	//  *
	//  * @param [string] $option
	//  * @return void
	//  * @todo object 결과뿐만 아니라 다양한 결과 옵션이 가능하도록 수정
	//  */
	// private function _resultOption($option)
	// {
	// 	if (!empty($option) && $option) {
	// 		$flag = (strpos($option, 'compile'));

	// 		if ($flag !== false) {
	// 			return static::$build->getCompiledSelect();
	// 		} else {
	// 			return static::$build->get()->{"get".ucfirst($option)}();
	// 		}
	// 	}
	// }
}