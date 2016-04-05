<?php
namespace RiotAPILib\Dto;

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
	 * @return mixed
	 */
	public function getChampionId() {
		return $this->championId;
	}

	/**
	 * @return mixed
	 */
	public function getPickTurn() {
		return $this->pickTurn;
	}

}