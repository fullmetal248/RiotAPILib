<?php
namespace RiotAPILib\Dto\tournament_provider;

use RiotAPILib\Dto\collection\DtoArrayList;

class TournamentCode {
	private $code;
	private $id;
	private $lobbyName, $map, $metaData;
	private $participants;
	private $password, $pickType;
	private $providerId;
	private $region, $spectators;
	private $teamSize, $tournamentId;

	/**
	 * TournamentCode constructor.
	 * @param $code
	 * @param $id
	 * @param $lobbyName
	 * @param $map
	 * @param $metaData
	 * @param $participants
	 * @param $password
	 * @param $pickType
	 * @param $providerId
	 * @param $region
	 * @param $spectators
	 * @param $teamSize
	 * @param $tournamentId
	 */
	public function __construct($code, $id, $lobbyName, $map, $metaData, $participants, $password, $pickType,
								$providerId, $region, $spectators, $teamSize, $tournamentId) {
		$this->code = $code;
		$this->id = $id;
		$this->lobbyName = $lobbyName;
		$this->map = $map;
		$this->metaData = $metaData;
		$this->participants = $participants;
		$this->password = $password;
		$this->pickType = $pickType;
		$this->providerId = $providerId;
		$this->region = $region;
		$this->spectators = $spectators;
		$this->teamSize = $teamSize;
		$this->tournamentId = $tournamentId;
	}

	/**
	 * @return string
	 */
	public function getCode() {
		return $this->code;
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
	public function getLobbyName() {
		return $this->lobbyName;
	}

	/**
	 * @return string
	 */
	public function getMap() {
		return $this->map;
	}

	/**
	 * @return string
	 */
	public function getMetaData() {
		return $this->metaData;
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
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @return string
	 */
	public function getPickType() {
		return $this->pickType;
	}

	/**
	 * @return int
	 */
	public function getProviderId() {
		return $this->providerId;
	}

	/**
	 * @return int
	 */
	public function getRegion() {
		return $this->region;
	}

	/**
	 * @return string
	 */
	public function getSpectators() {
		return $this->spectators;
	}

	/**
	 * @return int
	 */
	public function getTeamSize() {
		return $this->teamSize;
	}

	/**
	 * @return int
	 */
	public function getTournamentId() {
		return $this->tournamentId;
	}
}