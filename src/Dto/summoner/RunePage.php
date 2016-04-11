<?php
namespace RiotAPILib\Dto\summoner;

use RiotAPILib\Dto\collection\DtoArrayList;

class RunePage {
	private $isCurrent;
	private $id;
	private $name;
	private $slots;

	/**
	 * RunePage constructor.
	 * @param $isCurrent
	 * @param $id
	 * @param $name
	 * @param $slots
	 */
	public function __construct($isCurrent, $id, $name, $slots) {
		$this->isCurrent = $isCurrent;
		$this->id = $id;
		$this->name = $name;
		$this->slots = $slots;
	}

	/**
	 * @return boolean
	 */
	public function getIsCurrent() {
		return $this->isCurrent;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getSlots() {
		return $this->slots;
	}
}