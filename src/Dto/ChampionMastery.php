<?php
namespace RiotAPILib\Dto;

class ChampionMastery {
	private $championId;
	private $championLevel, $championPoints;
	private $championPointsSinceLastLevel, $championPointsUntilNextLevel;
	private $isChestGranted;
	private $highestGrade;
	private $lastPlayTime, $playerId;

	/**
	 * @return int
	 */
	public function getChampionId() {
		return $this->championId;
	}

	/**
	 * @return int
	 */
	public function getChampionLevel() {
		return $this->championLevel;
	}

	/**
	 * @return int
	 */
	public function getChampionPoints() {
		return $this->championPoints;
	}

	/**
	 * @return int
	 */
	public function getChampionPointsSinceLastLevel() {
		return $this->championPointsSinceLastLevel;
	}

	/**
	 * @return int
	 */
	public function getChampionPointsUntilNextLevel() {
		return $this->championPointsUntilNextLevel;
	}

	/**
	 * @return boolean
	 */
	public function getIsChestGranted() {
		return $this->isChestGranted;
	}

	/**
	 * @return string
	 */
	public function getHighestGrade() {
		return $this->highestGrade;
	}

	/**
	 * @return int
	 */
	public function getLastPlayTime() {
		return $this->lastPlayTime;
	}

	/**
	 * @return int
	 */
	public function getPlayerId() {
		return $this->playerId;
	}
}