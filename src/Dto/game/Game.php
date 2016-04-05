<?php
namespace RiotAPILib\Dto;

use RiotAPILib\Dto\Collection\DtoArrayList;

class Game {
	private $championId;
	private $createDate;
	private $fellowPlayers;
	private $gameId;
	private $gameMode, $gameType;
	private $isInvalid;
	private $ipEarned, $level, $mapId, $spell1, $spell2;
	private $stats;
	private $subType;
	private $teamId;

	/**
	 * Game constructor.
	 * @param $championId
	 * @param $createDate
	 * @param $fellowPlayers
	 * @param $gameId
	 * @param $gameMode
	 * @param $gameType
	 * @param $isInvalid
	 * @param $ipEarned
	 * @param $level
	 * @param $mapId
	 * @param $spell1
	 * @param $spell2
	 * @param $stats
	 * @param $subType
	 * @param $teamId
	 */
	public function __construct($championId, $createDate, $fellowPlayers, $gameId, $gameMode, $gameType, $isInvalid,
								$ipEarned, $level, $mapId, $spell1, $spell2, $stats, $subType, $teamId) {
		$this->championId = $championId;
		$this->createDate = $createDate;
		$this->fellowPlayers = $fellowPlayers;
		$this->gameId = $gameId;
		$this->gameMode = $gameMode;
		$this->gameType = $gameType;
		$this->isInvalid = $isInvalid;
		$this->ipEarned = $ipEarned;
		$this->level = $level;
		$this->mapId = $mapId;
		$this->spell1 = $spell1;
		$this->spell2 = $spell2;
		$this->stats = $stats;
		$this->subType = $subType;
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
	public function getCreateDate() {
		return $this->createDate;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getFellowPlayers() {
		return $this->fellowPlayers;
	}

	/**
	 * @return int
	 */
	public function getGameId() {
		return $this->gameId;
	}

	/**
	 * @return string
	 */
	public function getGameMode() {
		return $this->gameMode;
	}

	/**
	 * @return string
	 */
	public function getGameType() {
		return $this->gameType;
	}

	/**
	 * @return boolean
	 */
	public function getIsInvalid() {
		return $this->isInvalid;
	}

	/**
	 * @return int
	 */
	public function getIpEarned() {
		return $this->ipEarned;
	}

	/**
	 * @return int
	 */
	public function getLevel() {
		return $this->level;
	}

	/**
	 * @return int
	 */
	public function getMapId() {
		return $this->mapId;
	}

	/**
	 * @return int
	 */
	public function getSpell1() {
		return $this->spell1;
	}

	/**
	 * @return int
	 */
	public function getSpell2() {
		return $this->spell2;
	}

	/**
	 * @return RawStats
	 */
	public function getStats() {
		return $this->stats;
	}

	/**
	 * @return string
	 */
	public function getSubType() {
		return $this->subType;
	}

	/**
	 * @return int
	 */
	public function getTeamId() {
		return $this->teamId;
	}
}