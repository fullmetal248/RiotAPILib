<?php
namespace RiotAPILib\Dto;

class LeagueEntry {
	private $division;
	private $isFreshBlood, $isHotStreak, $isInactive, $isVeteran;
	private $leaguePoints, $losses;
	private $miniSeries;
	private $playerOrTeamId, $playerOrTeamName;
	private $wins;

	/**
	 * LeagueEntry constructor.
	 * @param $division
	 * @param $isFreshBlood
	 * @param $isHotStreak
	 * @param $isInactive
	 * @param $isVeteran
	 * @param $leaguePoints
	 * @param $losses
	 * @param $miniSeries
	 * @param $playerOrTeamId
	 * @param $playerOrTeamName
	 * @param $wins
	 */
	public function __construct($division, $isFreshBlood, $isHotStreak, $isInactive, $isVeteran, $leaguePoints, $losses,
								$miniSeries, $playerOrTeamId, $playerOrTeamName, $wins) {
		$this->division = $division;
		$this->isFreshBlood = $isFreshBlood;
		$this->isHotStreak = $isHotStreak;
		$this->isInactive = $isInactive;
		$this->isVeteran = $isVeteran;
		$this->leaguePoints = $leaguePoints;
		$this->losses = $losses;
		$this->miniSeries = $miniSeries;
		$this->playerOrTeamId = $playerOrTeamId;
		$this->playerOrTeamName = $playerOrTeamName;
		$this->wins = $wins;
	}

	/**
	 * @return string
	 */
	public function getDivision() {
		return $this->division;
	}

	/**
	 * @return boolean
	 */
	public function getIsFreshBlood() {
		return $this->isFreshBlood;
	}

	/**
	 * @return boolean
	 */
	public function getIsHotStreak() {
		return $this->isHotStreak;
	}

	/**
	 * @return boolean
	 */
	public function getIsInactive() {
		return $this->isInactive;
	}

	/**
	 * @return boolean
	 */
	public function getIsVeteran() {
		return $this->isVeteran;
	}

	/**
	 * @return int
	 */
	public function getLeaguePoints() {
		return $this->leaguePoints;
	}

	/**
	 * @return int
	 */
	public function getLosses() {
		return $this->losses;
	}

	/**
	 * @return MiniSeries
	 */
	public function getMiniSeries() {
		return $this->miniSeries;
	}

	/**
	 * @return string
	 */
	public function getPlayerOrTeamId() {
		return $this->playerOrTeamId;
	}

	/**
	 * @return string
	 */
	public function getPlayerOrTeamName() {
		return $this->playerOrTeamName;
	}

	/**
	 * @return int
	 */
	public function getWins() {
		return $this->wins;
	}

}