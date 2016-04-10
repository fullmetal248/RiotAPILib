<?php
namespace RiotAPILib\Dto\summoner;

class Summoner {
	private $id;
	private $name;
	private $profileIconId;
	private $revisionDate;
	private $summonerLevel;

	/**
	 * Summoner constructor.
	 * @param $id
	 * @param $name
	 * @param $profileIconId
	 * @param $revisionDate
	 * @param $summonerLevel
	 */
	public function __construct($id, $name, $profileIconId, $revisionDate, $summonerLevel) {
		$this->id = $id;
		$this->name = $name;
		$this->profileIconId = $profileIconId;
		$this->revisionDate = $revisionDate;
		$this->summonerLevel = $summonerLevel;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return int
	 */
	public function getProfileIconId() {
		return $this->profileIconId;
	}

	/**
	 * @return int
	 */
	public function getRevisionDate() {
		return $this->revisionDate;
	}

	/**
	 * @return int
	 */
	public function getSummonerLevel() {
		return $this->summonerLevel;
	}
}