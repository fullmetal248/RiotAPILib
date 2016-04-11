<?php
namespace RiotAPILib\Dto\summoner;

use RiotAPILib\Dto\collection\DtoArrayList;

class MasteryPage {
	private $isCurrent;
	private $id;
	private $masteries;
	private $name;

	/**
	 * MasteryPage constructor.
	 * @param $isCurrent
	 * @param $id
	 * @param $masteries
	 * @param $name
	 */
	public function __construct($isCurrent, $id, $masteries, $name) {
		$this->isCurrent = $isCurrent;
		$this->id = $id;
		$this->masteries = $masteries;
		$this->name = $name;
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
	 * @return DtoArrayList
	 */
	public function getMasteries() {
		return $this->masteries;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}
}