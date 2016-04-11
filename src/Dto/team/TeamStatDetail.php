<?php
namespace RiotAPILib\Dto\team;

class TeamStatDetail {
	private $averageGamesPlayed, $losses;
	private $teamStatType;
	private $wins;

	/**
	 * TeamStatDetail constructor.
	 * @param $averageGamesPlayed
	 * @param $losses
	 * @param $teamStatType
	 * @param $wins
	 */
	public function __construct($averageGamesPlayed, $losses, $teamStatType, $wins) {
		$this->averageGamesPlayed = $averageGamesPlayed;
		$this->losses = $losses;
		$this->teamStatType = $teamStatType;
		$this->wins = $wins;
	}

	/**
	 * @return int
	 */
	public function getAverageGamesPlayed() {
		return $this->averageGamesPlayed;
	}

	/**
	 * @return int
	 */
	public function getLosses() {
		return $this->losses;
	}

	/**
	 * @return string
	 */
	public function getTeamStatType() {
		return $this->teamStatType;
	}

	/**
	 * @return int
	 */
	public function getWins() {
		return $this->wins;
	}
}