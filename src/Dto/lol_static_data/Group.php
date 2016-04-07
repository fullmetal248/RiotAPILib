<?php
namespace RiotAPILib\Dto\lol_static_data;

class Group {
	private $maxGroupOwnable, $key;

	/**
	 * Group constructor.
	 * @param $maxGroupOwnable
	 * @param $key
	 */
	public function __construct($maxGroupOwnable, $key) {
		$this->maxGroupOwnable = $maxGroupOwnable;
		$this->key = $key;
	}

	/**
	 * @return string
	 */
	public function getMaxGroupOwnable() {
		return $this->maxGroupOwnable;
	}

	/**
	 * @return string
	 */
	public function getKey() {
		return $this->key;
	}
}