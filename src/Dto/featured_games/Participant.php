<?php
namespace RiotAPILib\Dto\featured_games;

class Participant {
	private $isBot;
	private $championId, $profileIconId, $spell1Id, $spell2Id;
	private $summonerName;
	private $teamId;

	/**
	 * Participant constructor.
	 * @param $isBot
	 * @param $championId
	 * @param $profileIconId
	 * @param $spell1Id
	 * @param $spell2Id
	 * @param $summonerName
	 * @param $teamId
	 */
	public function __construct($isBot, $championId, $profileIconId, $spell1Id, $spell2Id, $summonerName, $teamId) {
		$this->isBot = $isBot;
		$this->championId = $championId;
		$this->profileIconId = $profileIconId;
		$this->spell1Id = $spell1Id;
		$this->spell2Id = $spell2Id;
		$this->summonerName = $summonerName;
		$this->teamId = $teamId;
	}

	/**
	 * @return mixed
	 */
	public function getIsBot() {
		return $this->isBot;
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
	public function getProfileIconId() {
		return $this->profileIconId;
	}

	/**
	 * @return mixed
	 */
	public function getSpell1Id() {
		return $this->spell1Id;
	}

	/**
	 * @return mixed
	 */
	public function getSpell2Id() {
		return $this->spell2Id;
	}

	/**
	 * @return mixed
	 */
	public function getSummonerName() {
		return $this->summonerName;
	}

	/**
	 * @return mixed
	 */
	public function getTeamId() {
		return $this->teamId;
	}

}