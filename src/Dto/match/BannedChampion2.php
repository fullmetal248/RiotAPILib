<?php
namespace RiotAPILib\Dto\match;

//TODO 要変更
class BannedChampion2 {
	private $championId, $pickTurn;

	/**
	 * BannedChampion2 constructor.
	 * @param $championId
	 * @param $pickTurn
	 */
	public function __construct($championId, $pickTurn) {
		$this->championId = $championId;
		$this->pickTurn = $pickTurn;
	}

	/**
	 * @return int
	 */
	public function getChampionId() {
		return $this->championId;
	}

	/**
	 * @return int
	 */
	public function getPickTurn() {
		return $this->pickTurn;
	}

}