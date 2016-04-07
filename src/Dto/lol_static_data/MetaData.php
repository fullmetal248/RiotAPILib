<?php
namespace RiotAPILib\Dto\lol_static_data;

class MetaData {
	private $isRune;
	private $tier, $type;

	/**
	 * MetaData constructor.
	 * @param $isRune
	 * @param $tier
	 * @param $type
	 */
	public function __construct($isRune, $tier, $type) {
		$this->isRune = $isRune;
		$this->tier = $tier;
		$this->type = $type;
	}

	/**
	 * @return boolean
	 */
	public function getIsRune() {
		return $this->isRune;
	}

	/**
	 * @return string
	 */
	public function getTier() {
		return $this->tier;
	}

	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}
}