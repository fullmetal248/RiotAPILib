<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoArrayList;

class MasteryTreeList {
	private $masteryTreeItems;

	/**
	 * MasteryTreeList constructor.
	 * @param $masteryTreeItems
	 */
	public function __construct($masteryTreeItems) {
		$this->masteryTreeItems = $masteryTreeItems;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getMasteryTreeItems() {
		return $this->masteryTreeItems;
	}
}