<?php
namespace RiotAPILib\Dto\featured_games;

class BannedChampion {
	private $championId;
	private $pickTurn;
	private $teamId;

	/**
	 * BannedChampion constructor.
	 * @param $championId
	 * @param $pickTurn
	 * @param $teamId
	 */
	public function __construct($championId, $pickTurn, $teamId) {
		$this->championId = $championId;
		$this->pickTurn = $pickTurn;
		$this->teamId = $teamId;
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

	/**
	 * @return int
	 */
	public function getTeamId() {
		return $this->teamId;
	}


}