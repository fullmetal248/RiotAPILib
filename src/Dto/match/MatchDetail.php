<?php
namespace RiotAPILib\Dto\match;

use RiotAPILib\Dto\collection\DtoArrayList;

class MatchDetail {
	private $mapId;
	private $matchCreation, $matchDuration, $matchId;
	private $matchMode, $matchType, $matchVersion;
	private $participantIdentities;
	private $participants;
	private $platformId, $queueType, $region, $season;
	private $teams;
	private $timeline;

	/**
	 * MatchDetail constructor.
	 * @param $mapId
	 * @param $matchCreation
	 * @param $matchDuration
	 * @param $matchId
	 * @param $matchMode
	 * @param $matchType
	 * @param $matchVersion
	 * @param $participantIdentities
	 * @param $participants
	 * @param $platformId
	 * @param $queueType
	 * @param $region
	 * @param $season
	 * @param $teams
	 * @param $timeline
	 */
	public function __construct($mapId, $matchCreation, $matchDuration, $matchId, $matchMode, $matchType, $matchVersion,
								$participantIdentities, $participants, $platformId, $queueType, $region, $season,
								$teams, $timeline) {
		$this->mapId = $mapId;
		$this->matchCreation = $matchCreation;
		$this->matchDuration = $matchDuration;
		$this->matchId = $matchId;
		$this->matchMode = $matchMode;
		$this->matchType = $matchType;
		$this->matchVersion = $matchVersion;
		$this->participantIdentities = $participantIdentities;
		$this->participants = $participants;
		$this->platformId = $platformId;
		$this->queueType = $queueType;
		$this->region = $region;
		$this->season = $season;
		$this->teams = $teams;
		$this->timeline = $timeline;
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
	public function getMatchCreation() {
		return $this->matchCreation;
	}

	/**
	 * @return int
	 */
	public function getMatchDuration() {
		return $this->matchDuration;
	}

	/**
	 * @return int
	 */
	public function getMatchId() {
		return $this->matchId;
	}

	/**
	 * @return string
	 */
	public function getMatchMode() {
		return $this->matchMode;
	}

	/**
	 * @return string
	 */
	public function getMatchType() {
		return $this->matchType;
	}

	/**
	 * @return string
	 */
	public function getMatchVersion() {
		return $this->matchVersion;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getParticipantIdentities() {
		return $this->participantIdentities;
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

	/**
	 * @return string
	 */
	public function getQueueType() {
		return $this->queueType;
	}

	/**
	 * @return string
	 */
	public function getRegion() {
		return $this->region;
	}

	/**
	 * @return string
	 */
	public function getSeason() {
		return $this->season;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getTeams() {
		return $this->teams;
	}

	/**
	 * @return Timeline
	 */
	public function getTimeline() {
		return $this->timeline;
	}

}