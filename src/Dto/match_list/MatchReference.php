<?php
namespace RiotAPILib\Dto\match_list;

class MatchReference {
	private $champion;
	private $lane;
	private $matchId;
	private $platformId, $queue, $region, $role, $season;
	private $timestamp;

	/**
	 * MatchReference constructor.
	 * @param $champion
	 * @param $lane
	 * @param $matchId
	 * @param $platformId
	 * @param $queue
	 * @param $region
	 * @param $role
	 * @param $season
	 * @param $timestamp
	 */
	public function __construct($champion, $lane, $matchId, $platformId, $queue, $region, $role, $season, $timestamp) {
		$this->champion = $champion;
		$this->lane = $lane;
		$this->matchId = $matchId;
		$this->platformId = $platformId;
		$this->queue = $queue;
		$this->region = $region;
		$this->role = $role;
		$this->season = $season;
		$this->timestamp = $timestamp;
	}

	/**
	 * @return int
	 */
	public function getChampion() {
		return $this->champion;
	}

	/**
	 * @return string
	 */
	public function getLane() {
		return $this->lane;
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
	public function getPlatformId() {
		return $this->platformId;
	}

	/**
	 * @return string
	 */
	public function getQueue() {
		return $this->queue;
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
	public function getRole() {
		return $this->role;
	}

	/**
	 * @return string
	 */
	public function getSeason() {
		return $this->season;
	}

	/**
	 * @return int
	 */
	public function getTimestamp() {
		return $this->timestamp;
	}
}