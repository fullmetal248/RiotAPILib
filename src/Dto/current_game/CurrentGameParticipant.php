<?php
namespace RiotAPILib\Dto;

class CurrentGameParticipant {
	private $isBot;
	private $championId;
	private $masteries;
	private $profileIconId;
	private $runes;
	private $spell1Id, $spell2Id, $summonerId;
	private $summonerName;
	private $teamId;

	/**
	 * CurrentGameParticipant constructor.
	 * @param $isBot
	 * @param $championId
	 * @param $masteries
	 * @param $profileIconId
	 * @param $runes
	 * @param $spell1Id
	 * @param $spell2Id
	 * @param $summonerId
	 * @param $summonerName
	 * @param $teamId
	 */
	public function __construct($isBot, $championId, $masteries, $profileIconId, $runes, $spell1Id, $spell2Id, $summonerId, $summonerName, $teamId) {
		$this->isBot = $isBot;
		$this->championId = $championId;
		$this->masteries = $masteries;
		$this->profileIconId = $profileIconId;
		$this->runes = $runes;
		$this->spell1Id = $spell1Id;
		$this->spell2Id = $spell2Id;
		$this->summonerId = $summonerId;
		$this->summonerName = $summonerName;
		$this->teamId = $teamId;
	}

	/**
	 * @return boolean
	 */
	public function getIsBot() {
		return $this->isBot;
	}

	/**
	 * @return int
	 */
	public function getChampionId() {
		return $this->championId;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getMasteries() {
		return $this->masteries;
	}

	/**
	 * @return int
	 */
	public function getProfileIconId() {
		return $this->profileIconId;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getRunes() {
		return $this->runes;
	}

	/**
	 * @return int
	 */
	public function getSpell1Id() {
		return $this->spell1Id;
	}

	/**
	 * @return int
	 */
	public function getSpell2Id() {
		return $this->spell2Id;
	}

	/**
	 * @return int
	 */
	public function getSummonerId() {
		return $this->summonerId;
	}

	/**
	 * @return string
	 */
	public function getSummonerName() {
		return $this->summonerName;
	}

	/**
	 * @return int
	 */
	public function getTeamId() {
		return $this->teamId;
	}
}