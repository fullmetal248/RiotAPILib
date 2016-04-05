<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoArrayList;

class LevelTip {
	private $effect, $label;

	/**
	 * LevelTip constructor.
	 * @param $effect
	 * @param $label
	 */
	public function __construct($effect, $label) {
		$this->effect = $effect;
		$this->label = $label;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getEffect() {
		return $this->effect;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getLabel() {
		return $this->label;
	}

}