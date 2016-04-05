<?php
namespace RiotAPILib\Dto;

class ParticipantFrame {
	private $currentGold, $dominionScore, $jungleMinionsKilled, $level, $minionsKilled, $participantId;
	private $position;
	private $teamScore, $totalGold, $xp;

	/**
	 * ParticipantFrame constructor.
	 * @param $currentGold
	 * @param $dominionScore
	 * @param $jungleMinionsKilled
	 * @param $level
	 * @param $minionsKilled
	 * @param $participantId
	 * @param $position
	 * @param $teamScore
	 * @param $totalGold
	 * @param $xp
	 */
	public function __construct($currentGold, $dominionScore, $jungleMinionsKilled, $level, $minionsKilled,
								$participantId, $position, $teamScore, $totalGold, $xp) {
		$this->currentGold = $currentGold;
		$this->dominionScore = $dominionScore;
		$this->jungleMinionsKilled = $jungleMinionsKilled;
		$this->level = $level;
		$this->minionsKilled = $minionsKilled;
		$this->participantId = $participantId;
		$this->position = $position;
		$this->teamScore = $teamScore;
		$this->totalGold = $totalGold;
		$this->xp = $xp;
	}

	/**
	 * @return int
	 */
	public function getCurrentGold() {
		return $this->currentGold;
	}

	/**
	 * @return int
	 */
	public function getDominionScore() {
		return $this->dominionScore;
	}

	/**
	 * @return int
	 */
	public function getJungleMinionsKilled() {
		return $this->jungleMinionsKilled;
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
	public function getMinionsKilled() {
		return $this->minionsKilled;
	}

	/**
	 * @return int
	 */
	public function getParticipantId() {
		return $this->participantId;
	}

	/**
	 * @return Position
	 */
	public function getPosition() {
		return $this->position;
	}

	/**
	 * @return int
	 */
	public function getTeamScore() {
		return $this->teamScore;
	}

	/**
	 * @return int
	 */
	public function getTotalGold() {
		return $this->totalGold;
	}

	/**
	 * @return int
	 */
	public function getXp() {
		return $this->xp;
	}

}