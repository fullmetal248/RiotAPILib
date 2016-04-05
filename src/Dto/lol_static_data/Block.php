<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoArrayList;

class Block {
	private $items;
	private $isRecMath;
	private $type;

	/**
	 * Block constructor.
	 * @param $items
	 * @param $isRecMath
	 * @param $type
	 */
	public function __construct($items, $isRecMath, $type) {
		$this->items = $items;
		$this->isRecMath = $isRecMath;
		$this->type = $type;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getItems() {
		return $this->items;
	}

	/**
	 * @return boolean
	 */
	public function getIsRecMath() {
		return $this->isRecMath;
	}

	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

}