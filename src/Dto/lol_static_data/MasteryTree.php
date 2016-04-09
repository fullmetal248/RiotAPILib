<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoArrayList;

class MasteryTree {
	private $cunning, $ferocity, $resolve;

	/**
	 * MasteryTree constructor.
	 * @param $cunning
	 * @param $ferocity
	 * @param $resolve
	 */
	public function __construct($cunning, $ferocity, $resolve) {
		$this->cunning = $cunning;
		$this->ferocity = $ferocity;
		$this->resolve = $resolve;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getCunning() {
		return $this->cunning;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getFerocity() {
		return $this->ferocity;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getResolve() {
		return $this->resolve;
	}
}