<?php
namespace RiotAPILib\Dto;

class Player {
	private $championId;
	private $summonerId;
	private $teamId;

	/**
	 * PlayerDto constructor.
	 * @param $championId
	 * @param $summonerId
	 * @param $teamId
	 */
	public function __construct($championId, $summonerId, $teamId) {
		$this->championId = $championId;
		$this->summonerId = $summonerId;
		$this->teamId = $teamId;
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
	public function getSummonerId() {
		return $this->summonerId;
	}

	/**
	 * @return mixed
	 */
	public function getTeamId() {
		return $this->teamId;
	}
}