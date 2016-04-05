<?php
namespace RiotAPILib\Dto\match;

class ParticipantTimeline {
	private $ancientGolemAssistsPerMinCounts, $ancientGolemKillsPerMinCounts, $assistedLaneDeathsPerMinDeltas,
		$assistedLaneKillsPerMinDeltas, $baronAssistsPerMinCounts, $baronKillsPerMinCounts, $creepsPerMinDeltas,
		$csDiffPerMinDeltas, $damageTakenDiffPerMin, $damageTakenPerMinDeltas, $dragonAssistsPerMinCounts,
		$dragonKillsPerMinCounts, $elderLizardAssistsPerMinCounts, $elderLizardKillsPerMinCounts,
		$goldPerMinDeltas, $inhibitorAssistsPerMinCounts, $inhibitorKillsPerMinCounts;
	private $lane, $role;
	private $towerAssistsPerMinCounts, $towerKillsPerMinCounts, $towerKillsPerMinDeltas, $vilemawAssistsPerMinCounts,
		$vilemawKillsPerMinCounts, $wardsPerMinDeltas, $xpDiffPerMinDeltas, $xpPerMinDeltas;

	/**
	 * ParticipantTimeline constructor.
	 * @param $ancientGolemAssistsPerMinCounts
	 * @param $ancientGolemKillsPerMinCounts
	 * @param $assistedLaneDeathsPerMinDeltas
	 * @param $assistedLaneKillsPerMinDeltas
	 * @param $baronAssistsPerMinCounts
	 * @param $baronKillsPerMinCounts
	 * @param $creepsPerMinDeltas
	 * @param $csDiffPerMinDeltas
	 * @param $damageTakenDiffPerMin
	 * @param $damageTakenPerMinDeltas
	 * @param $dragonAssistsPerMinCounts
	 * @param $dragonKillsPerMinCounts
	 * @param $elderLizardAssistsPerMinCounts
	 * @param $elderLizardKillsPerMinCounts
	 * @param $goldPerMinDeltas
	 * @param $inhibitorAssistsPerMinCounts
	 * @param $inhibitorKillsPerMinCounts
	 * @param $lane
	 * @param $role
	 * @param $towerAssistsPerMinCounts
	 * @param $towerKillsPerMinCounts
	 * @param $towerKillsPerMinDeltas
	 * @param $vilemawAssistsPerMinCounts
	 * @param $vilemawKillsPerMinCounts
	 * @param $wardsPerMinDeltas
	 * @param $xpDiffPerMinDeltas
	 * @param $xpPerMinDeltas
	 */
	public function __construct($ancientGolemAssistsPerMinCounts, $ancientGolemKillsPerMinCounts,
								$assistedLaneDeathsPerMinDeltas, $assistedLaneKillsPerMinDeltas,
								$baronAssistsPerMinCounts, $baronKillsPerMinCounts, $creepsPerMinDeltas,
								$csDiffPerMinDeltas, $damageTakenDiffPerMin, $damageTakenPerMinDeltas,
								$dragonAssistsPerMinCounts, $dragonKillsPerMinCounts, $elderLizardAssistsPerMinCounts,
								$elderLizardKillsPerMinCounts, $goldPerMinDeltas, $inhibitorAssistsPerMinCounts,
								$inhibitorKillsPerMinCounts, $lane, $role, $towerAssistsPerMinCounts,
								$towerKillsPerMinCounts, $towerKillsPerMinDeltas, $vilemawAssistsPerMinCounts,
								$vilemawKillsPerMinCounts, $wardsPerMinDeltas, $xpDiffPerMinDeltas, $xpPerMinDeltas) {
		$this->ancientGolemAssistsPerMinCounts = $ancientGolemAssistsPerMinCounts;
		$this->ancientGolemKillsPerMinCounts = $ancientGolemKillsPerMinCounts;
		$this->assistedLaneDeathsPerMinDeltas = $assistedLaneDeathsPerMinDeltas;
		$this->assistedLaneKillsPerMinDeltas = $assistedLaneKillsPerMinDeltas;
		$this->baronAssistsPerMinCounts = $baronAssistsPerMinCounts;
		$this->baronKillsPerMinCounts = $baronKillsPerMinCounts;
		$this->creepsPerMinDeltas = $creepsPerMinDeltas;
		$this->csDiffPerMinDeltas = $csDiffPerMinDeltas;
		$this->damageTakenDiffPerMin = $damageTakenDiffPerMin;
		$this->damageTakenPerMinDeltas = $damageTakenPerMinDeltas;
		$this->dragonAssistsPerMinCounts = $dragonAssistsPerMinCounts;
		$this->dragonKillsPerMinCounts = $dragonKillsPerMinCounts;
		$this->elderLizardAssistsPerMinCounts = $elderLizardAssistsPerMinCounts;
		$this->elderLizardKillsPerMinCounts = $elderLizardKillsPerMinCounts;
		$this->goldPerMinDeltas = $goldPerMinDeltas;
		$this->inhibitorAssistsPerMinCounts = $inhibitorAssistsPerMinCounts;
		$this->inhibitorKillsPerMinCounts = $inhibitorKillsPerMinCounts;
		$this->lane = $lane;
		$this->role = $role;
		$this->towerAssistsPerMinCounts = $towerAssistsPerMinCounts;
		$this->towerKillsPerMinCounts = $towerKillsPerMinCounts;
		$this->towerKillsPerMinDeltas = $towerKillsPerMinDeltas;
		$this->vilemawAssistsPerMinCounts = $vilemawAssistsPerMinCounts;
		$this->vilemawKillsPerMinCounts = $vilemawKillsPerMinCounts;
		$this->wardsPerMinDeltas = $wardsPerMinDeltas;
		$this->xpDiffPerMinDeltas = $xpDiffPerMinDeltas;
		$this->xpPerMinDeltas = $xpPerMinDeltas;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getAncientGolemAssistsPerMinCounts() {
		return $this->ancientGolemAssistsPerMinCounts;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getAncientGolemKillsPerMinCounts() {
		return $this->ancientGolemKillsPerMinCounts;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getAssistedLaneDeathsPerMinDeltas() {
		return $this->assistedLaneDeathsPerMinDeltas;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getAssistedLaneKillsPerMinDeltas() {
		return $this->assistedLaneKillsPerMinDeltas;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getBaronAssistsPerMinCounts() {
		return $this->baronAssistsPerMinCounts;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getBaronKillsPerMinCounts() {
		return $this->baronKillsPerMinCounts;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getCreepsPerMinDeltas() {
		return $this->creepsPerMinDeltas;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getCsDiffPerMinDeltas() {
		return $this->csDiffPerMinDeltas;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getDamageTakenDiffPerMin() {
		return $this->damageTakenDiffPerMin;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getDamageTakenPerMinDeltas() {
		return $this->damageTakenPerMinDeltas;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getDragonAssistsPerMinCounts() {
		return $this->dragonAssistsPerMinCounts;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getDragonKillsPerMinCounts() {
		return $this->dragonKillsPerMinCounts;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getElderLizardAssistsPerMinCounts() {
		return $this->elderLizardAssistsPerMinCounts;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getElderLizardKillsPerMinCounts() {
		return $this->elderLizardKillsPerMinCounts;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getGoldPerMinDeltas() {
		return $this->goldPerMinDeltas;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getInhibitorAssistsPerMinCounts() {
		return $this->inhibitorAssistsPerMinCounts;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getInhibitorKillsPerMinCounts() {
		return $this->inhibitorKillsPerMinCounts;
	}

	/**
	 * @return string
	 */
	public function getLane() {
		return $this->lane;
	}

	/**
	 * @return string
	 */
	public function getRole() {
		return $this->role;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getTowerAssistsPerMinCounts() {
		return $this->towerAssistsPerMinCounts;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getTowerKillsPerMinCounts() {
		return $this->towerKillsPerMinCounts;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getTowerKillsPerMinDeltas() {
		return $this->towerKillsPerMinDeltas;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getVilemawAssistsPerMinCounts() {
		return $this->vilemawAssistsPerMinCounts;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getVilemawKillsPerMinCounts() {
		return $this->vilemawKillsPerMinCounts;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getWardsPerMinDeltas() {
		return $this->wardsPerMinDeltas;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getXpDiffPerMinDeltas() {
		return $this->xpDiffPerMinDeltas;
	}

	/**
	 * @return ParticipantTimelineData
	 */
	public function getXpPerMinDeltas() {
		return $this->xpPerMinDeltas;
	}

}