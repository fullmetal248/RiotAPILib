<?php
namespace RiotAPILib\Dto\match;

use RiotAPILib\Dto\collection\DtoArrayList;

class Team {
	private $bans;
	private $baronKills;
	private $dominionVictoryScore;
	private $dragonKills;
	private $isFirstBaron, $isFirstBlood, $isFirstDragon, $isFirstInhibitor, $isFirstRiftHerald, $isFirstTower;
	private $inhibitorKills, $riftHeraldKills, $teamId, $towerKills, $vilemawKills;
	private $isWinner;

	/**
	 * Team constructor.
	 * @param $bans
	 * @param $baronKills
	 * @param $dominionVictoryScore
	 * @param $dragonKills
	 * @param $isFirstBaron
	 * @param $isFirstBlood
	 * @param $isFirstDragon
	 * @param $isFirstInhibitor
	 * @param $isFirstRiftHerald
	 * @param $isFirstTower
	 * @param $inhibitorKills
	 * @param $riftHeraldKills
	 * @param $teamId
	 * @param $towerKills
	 * @param $vilemawKills
	 * @param $isWinner
	 */
	public function __construct($bans, $baronKills, $dominionVictoryScore, $dragonKills, $isFirstBaron, $isFirstBlood,
								$isFirstDragon, $isFirstInhibitor, $isFirstRiftHerald, $isFirstTower, $inhibitorKills,
								$riftHeraldKills, $teamId, $towerKills, $vilemawKills, $isWinner) {
		$this->bans = $bans;
		$this->baronKills = $baronKills;
		$this->dominionVictoryScore = $dominionVictoryScore;
		$this->dragonKills = $dragonKills;
		$this->isFirstBaron = $isFirstBaron;
		$this->isFirstBlood = $isFirstBlood;
		$this->isFirstDragon = $isFirstDragon;
		$this->isFirstInhibitor = $isFirstInhibitor;
		$this->isFirstRiftHerald = $isFirstRiftHerald;
		$this->isFirstTower = $isFirstTower;
		$this->inhibitorKills = $inhibitorKills;
		$this->riftHeraldKills = $riftHeraldKills;
		$this->teamId = $teamId;
		$this->towerKills = $towerKills;
		$this->vilemawKills = $vilemawKills;
		$this->isWinner = $isWinner;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getBans() {
		return $this->bans;
	}

	/**
	 * @return int
	 */
	public function getBaronKills() {
		return $this->baronKills;
	}

	/**
	 * @return int
	 */
	public function getDominionVictoryScore() {
		return $this->dominionVictoryScore;
	}

	/**
	 * @return int
	 */
	public function getDragonKills() {
		return $this->dragonKills;
	}

	/**
	 * @return boolean
	 */
	public function getIsFirstBaron() {
		return $this->isFirstBaron;
	}

	/**
	 * @return boolean
	 */
	public function getIsFirstBlood() {
		return $this->isFirstBlood;
	}

	/**
	 * @return boolean
	 */
	public function getIsFirstDragon() {
		return $this->isFirstDragon;
	}

	/**
	 * @return boolean
	 */
	public function getIsFirstInhibitor() {
		return $this->isFirstInhibitor;
	}

	/**
	 * @return boolean
	 */
	public function getIsFirstRiftHerald() {
		return $this->isFirstRiftHerald;
	}

	/**
	 * @return boolean
	 */
	public function getIsFirstTower() {
		return $this->isFirstTower;
	}

	/**
	 * @return int
	 */
	public function getInhibitorKills() {
		return $this->inhibitorKills;
	}

	/**
	 * @return int
	 */
	public function getRiftHeraldKills() {
		return $this->riftHeraldKills;
	}

	/**
	 * @return int
	 */
	public function getTeamId() {
		return $this->teamId;
	}

	/**
	 * @return int
	 */
	public function getTowerKills() {
		return $this->towerKills;
	}

	/**
	 * @return int
	 */
	public function getVilemawKills() {
		return $this->vilemawKills;
	}

	/**
	 * @return boolean
	 */
	public function getIsWinner() {
		return $this->isWinner;
	}

}