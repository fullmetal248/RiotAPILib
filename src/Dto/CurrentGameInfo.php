<?php
namespace RiotAPILib\Dto;

class CurrentGameInfo {
	private $bannedChampions;
	private $gameId, $gameLength;
	private $gameMode;
	private $gameQueueConfigId, $gameStartTime;
	private $gameType;
	private $mapId;
	private $observers;
	private $participants;
	private $platformId;

	/**
	 * CurrentGameInfo constructor.
	 * @param $bannedChampions
	 * @param $gameId
	 * @param $gameLength
	 * @param $gameMode
	 * @param $gameQueueConfigId
	 * @param $gameStartTime
	 * @param $gameType
	 * @param $mapId
	 * @param $observers
	 * @param $participants
	 * @param $platformId
	 */
	public function __construct($bannedChampions, $gameId, $gameLength, $gameMode, $gameQueueConfigId, $gameStartTime, $gameType, $mapId, $observers, $participants, $platformId) {
		$this->bannedChampions = $bannedChampions;
		$this->gameId = $gameId;
		$this->gameLength = $gameLength;
		$this->gameMode = $gameMode;
		$this->gameQueueConfigId = $gameQueueConfigId;
		$this->gameStartTime = $gameStartTime;
		$this->gameType = $gameType;
		$this->mapId = $mapId;
		$this->observers = $observers;
		$this->participants = $participants;
		$this->platformId = $platformId;
	}

	/**
	 * @return BannedChampion
	 */
	public function getBannedChampions() {
		return $this->bannedChampions;
	}

	/**
	 * @return int
	 */
	public function getGameId() {
		return $this->gameId;
	}

	/**
	 * @return int
	 */
	public function getGameLength() {
		return $this->gameLength;
	}

	/**
	 * @return string
	 */
	public function getGameMode() {
		return $this->gameMode;
	}

	/**
	 * @return int
	 */
	public function getGameQueueConfigId() {
		return $this->gameQueueConfigId;
	}

	/**
	 * @return int
	 */
	public function getGameStartTime() {
		return $this->gameStartTime;
	}

	/**
	 * @return string
	 */
	public function getGameType() {
		return $this->gameType;
	}

	/**
	 * @return int
	 */
	public function getMapId() {
		return $this->mapId;
	}

	/**
	 * @return Observer
	 */
	public function getObservers() {
		return $this->observers;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getParticipants() {
		return $this->participants;
	}

	/**
	 * @return string
	 */
	public function getPlatformId() {
		return $this->platformId;
	}
}