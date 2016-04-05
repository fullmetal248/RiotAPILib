<?php
namespace RiotAPILib\Dto\current_game;

class Mastery {
	private $masteryId;
	private $rank;

	/**
	 * Mastery constructor.
	 * @param $masteryId
	 * @param $rank
	 */
	public function __construct($masteryId, $rank) {
		$this->masteryId = $masteryId;
		$this->rank = $rank;
	}

	/**
	 * @return int
	 */
	public function getRank() {
		return $this->rank;
	}

	/**
	 * @return int
	 */
	public function getMasteryId() {
		return $this->masteryId;
	}
}