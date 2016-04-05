<?php
namespace RiotAPILib\Dto\match;

use RiotAPILib\Dto\collection\DtoArrayList;

class Participant {
	private $championId;
	private $highestAchievedSeasonTier;
	private $masteries;
	private $participantId;
	private $runes;
	private $spell1Id, $spell2Id;
	private $stats;
	private $teamId;
	private $timeline;

	/**
	 * Participant constructor.
	 * @param $championId
	 * @param $highestAchievedSeasonTier
	 * @param $masteries
	 * @param $participantId
	 * @param $runes
	 * @param $spell1Id
	 * @param $spell2Id
	 * @param $stats
	 * @param $teamId
	 * @param $timeline
	 */
	public function __construct($championId, $highestAchievedSeasonTier, $masteries, $participantId, $runes, $spell1Id,
								$spell2Id, $stats, $teamId, $timeline) {
		$this->championId = $championId;
		$this->highestAchievedSeasonTier = $highestAchievedSeasonTier;
		$this->masteries = $masteries;
		$this->participantId = $participantId;
		$this->runes = $runes;
		$this->spell1Id = $spell1Id;
		$this->spell2Id = $spell2Id;
		$this->stats = $stats;
		$this->teamId = $teamId;
		$this->timeline = $timeline;
	}

	/**
	 * @return int
	 */
	public function getChampionId() {
		return $this->championId;
	}

	/**
	 * @return string
	 */
	public function getHighestAchievedSeasonTier() {
		return $this->highestAchievedSeasonTier;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getMasteries() {
		return $this->masteries;
	}

	/**
	 * @return int
	 */
	public function getParticipantId() {
		return $this->participantId;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getRunes() {
		return $this->runes;
	}

	/**
	 * @return int
	 */
	public function getSpell1Id() {
		return $this->spell1Id;
	}

	/**
	 * @return int
	 */
	public function getSpell2Id() {
		return $this->spell2Id;
	}

	/**
	 * @return ParticipantStats
	 */
	public function getStats() {
		return $this->stats;
	}

	/**
	 * @return int
	 */
	public function getTeamId() {
		return $this->teamId;
	}

	/**
	 * @return ParticipantTimeline
	 */
	public function getTimeline() {
		return $this->timeline;
	}
}