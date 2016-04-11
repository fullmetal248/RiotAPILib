<?php
namespace RiotAPILib\Dto\team;

class MatchHistorySummary {
	private $assists;
	private $date;
	private $deaths;
	private $gameId;
	private $gameMode;
	private $isInvalid;
	private $kills, $mapId, $opposingTeamKills;
	private $opposingTeamName;
	private $isWin;

	/**
	 * MatchHistorySummary constructor.
	 * @param $assists
	 * @param $date
	 * @param $deaths
	 * @param $gameId
	 * @param $gameMode
	 * @param $isInvalid
	 * @param $kills
	 * @param $mapId
	 * @param $opposingTeamKills
	 * @param $opposingTeamName
	 * @param $isWin
	 */
	public function __construct($assists, $date, $deaths, $gameId, $gameMode, $isInvalid, $kills, $mapId,
								$opposingTeamKills, $opposingTeamName, $isWin) {
		$this->assists = $assists;
		$this->date = $date;
		$this->deaths = $deaths;
		$this->gameId = $gameId;
		$this->gameMode = $gameMode;
		$this->isInvalid = $isInvalid;
		$this->kills = $kills;
		$this->mapId = $mapId;
		$this->opposingTeamKills = $opposingTeamKills;
		$this->opposingTeamName = $opposingTeamName;
		$this->isWin = $isWin;
	}

	/**
	 * @return int
	 */
	public function getAssists() {
		return $this->assists;
	}

	/**
	 * @return int
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * @return int
	 */
	public function getDeaths() {
		return $this->deaths;
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
	 * @return boolean
	 */
	public function getIsInvalid() {
		return $this->isInvalid;
	}

	/**
	 * @return boolean
	 */
	public function getKills() {
		return $this->kills;
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
	public function getOpposingTeamKills() {
		return $this->opposingTeamKills;
	}

	/**
	 * @return string
	 */
	public function getOpposingTeamName() {
		return $this->opposingTeamName;
	}

	/**
	 * @return boolean
	 */
	public function getIsWin() {
		return $this->isWin;
	}
}