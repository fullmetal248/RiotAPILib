<?php
namespace RiotAPILib\Dto\lol_static_data;

class BlockItem {
	private $count, $id;

	/**
	 * BlockItemDto constructor.
	 * @param $count
	 * @param $id
	 */
	public function __construct($count, $id) {
		$this->count = $count;
		$this->id = $id;
	}

	/**
	 * @return int
	 */
	public function getCount() {
		return $this->count;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

}