<?php
namespace RiotAPILib\Dto\lol_static_data;

class MasteryTreeItem {
	private $masteryId;
	private $prereq;

	/**
	 * MasteryTreeItem constructor.
	 * @param $masteryId
	 * @param $prereq
	 */
	public function __construct($masteryId, $prereq) {
		$this->masteryId = $masteryId;
		$this->prereq = $prereq;
	}

	/**
	 * @return int
	 */
	public function getMasteryId() {
		return $this->masteryId;
	}

	/**
	 * @return string
	 */
	public function getPrereq() {
		return $this->prereq;
	}
}