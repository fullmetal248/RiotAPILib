<?php
namespace RiotAPILib\Dto\team;

use RiotAPILib\Dto\collection\DtoArrayList;

class Team {
	private $createDate;
	private $fullId;
	private $lastGameDate, $lastJoinDate, $lastJoinedRankedTeamQueueDate;
	private $matchHistory;
	private $modifyDate;
	private $name;
	private $roster;
	private $secondLastJoinDate;
	private $status;
	private $tag;
	private $teamStatDetails;
	private $thirdLastJoinDate;

	/**
	 * Team constructor.
	 * @param $createDate
	 * @param $fullId
	 * @param $lastGameDate
	 * @param $lastJoinDate
	 * @param $lastJoinedRankedTeamQueueDate
	 * @param $matchHistory
	 * @param $modifyDate
	 * @param $name
	 * @param $roster
	 * @param $secondLastJoinDate
	 * @param $status
	 * @param $tag
	 * @param $teamStatDetails
	 * @param $thirdLastJoinDate
	 */
	public function __construct($createDate, $fullId, $lastGameDate, $lastJoinDate, $lastJoinedRankedTeamQueueDate,
								$matchHistory, $modifyDate, $name, $roster, $secondLastJoinDate, $status, $tag,
								$teamStatDetails, $thirdLastJoinDate) {
		$this->createDate = $createDate;
		$this->fullId = $fullId;
		$this->lastGameDate = $lastGameDate;
		$this->lastJoinDate = $lastJoinDate;
		$this->lastJoinedRankedTeamQueueDate = $lastJoinedRankedTeamQueueDate;
		$this->matchHistory = $matchHistory;
		$this->modifyDate = $modifyDate;
		$this->name = $name;
		$this->roster = $roster;
		$this->secondLastJoinDate = $secondLastJoinDate;
		$this->status = $status;
		$this->tag = $tag;
		$this->teamStatDetails = $teamStatDetails;
		$this->thirdLastJoinDate = $thirdLastJoinDate;
	}

	/**
	 * @return int
	 */
	public function getCreateDate() {
		return $this->createDate;
	}

	/**
	 * @return string
	 */
	public function getFullId() {
		return $this->fullId;
	}

	/**
	 * @return int
	 */
	public function getLastGameDate() {
		return $this->lastGameDate;
	}

	/**
	 * @return int
	 */
	public function getLastJoinDate() {
		return $this->lastJoinDate;
	}

	/**
	 * @return int
	 */
	public function getLastJoinedRankedTeamQueueDate() {
		return $this->lastJoinedRankedTeamQueueDate;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getMatchHistory() {
		return $this->matchHistory;
	}

	/**
	 * @return int
	 */
	public function getModifyDate() {
		return $this->modifyDate;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return Roster
	 */
	public function getRoster() {
		return $this->roster;
	}

	/**
	 * @return int
	 */
	public function getSecondLastJoinDate() {
		return $this->secondLastJoinDate;
	}

	/**
	 * @return string
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @return string
	 */
	public function getTag() {
		return $this->tag;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getTeamStatDetails() {
		return $this->teamStatDetails;
	}

	/**
	 * @return int
	 */
	public function getThirdLastJoinDate() {
		return $this->thirdLastJoinDate;
	}
}