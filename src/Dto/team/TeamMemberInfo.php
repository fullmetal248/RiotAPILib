<?php
namespace RiotAPILib\Dto\team;

class TeamMemberInfo {
	private $inviteDate, $joinDate, $playerId;
	private $status;

	/**
	 * TeamMemberInfo constructor.
	 * @param $inviteDate
	 * @param $joinDate
	 * @param $playerId
	 * @param $status
	 */
	public function __construct($inviteDate, $joinDate, $playerId, $status) {
		$this->inviteDate = $inviteDate;
		$this->joinDate = $joinDate;
		$this->playerId = $playerId;
		$this->status = $status;
	}

	/**
	 * @return int
	 */
	public function getInviteDate() {
		return $this->inviteDate;
	}

	/**
	 * @return int
	 */
	public function getJoinDate() {
		return $this->joinDate;
	}

	/**
	 * @return int
	 */
	public function getPlayerId() {
		return $this->playerId;
	}

	/**
	 * @return string
	 */
	public function getStatus() {
		return $this->status;
	}
}