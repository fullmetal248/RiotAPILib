<?php
namespace RiotAPILib\Dto;

use RiotAPILib\Dto\Collection\DtoArrayList;

class Event {
	private $ascendedType;
	private $assistingParticipantIds;
	private $buildingType;
	private $creatorId;
	private $eventType;
	private $itemAfter, $itemBefore, $itemId, $killerId;
	private $laneType, $levelUpType, $monsterType;
	private $participantId;
	private $pointCaptured;
	private $position;
	private $skillSlot, $teamId;
	private $timestamp;
	private $towerType;
	private $victimId;
	private $wardType;

	/**
	 * Event constructor.
	 * @param $ascendedType
	 * @param $assistingParticipantIds
	 * @param $buildingType
	 * @param $creatorId
	 * @param $eventType
	 * @param $itemAfter
	 * @param $itemBefore
	 * @param $itemId
	 * @param $killerId
	 * @param $laneType
	 * @param $levelUpType
	 * @param $monsterType
	 * @param $participantId
	 * @param $pointCaptured
	 * @param $position
	 * @param $skillSlot
	 * @param $teamId
	 * @param $timestamp
	 * @param $towerType
	 * @param $victimId
	 * @param $wardType
	 */
	public function __construct($ascendedType, $assistingParticipantIds, $buildingType, $creatorId, $eventType,
								$itemAfter, $itemBefore, $itemId, $killerId, $laneType, $levelUpType, $monsterType,
								$participantId, $pointCaptured, $position, $skillSlot, $teamId, $timestamp, $towerType,
								$victimId, $wardType) {
		$this->ascendedType = $ascendedType;
		$this->assistingParticipantIds = $assistingParticipantIds;
		$this->buildingType = $buildingType;
		$this->creatorId = $creatorId;
		$this->eventType = $eventType;
		$this->itemAfter = $itemAfter;
		$this->itemBefore = $itemBefore;
		$this->itemId = $itemId;
		$this->killerId = $killerId;
		$this->laneType = $laneType;
		$this->levelUpType = $levelUpType;
		$this->monsterType = $monsterType;
		$this->participantId = $participantId;
		$this->pointCaptured = $pointCaptured;
		$this->position = $position;
		$this->skillSlot = $skillSlot;
		$this->teamId = $teamId;
		$this->timestamp = $timestamp;
		$this->towerType = $towerType;
		$this->victimId = $victimId;
		$this->wardType = $wardType;
	}

	/**
	 * @return string
	 */
	public function getAscendedType() {
		return $this->ascendedType;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getAssistingParticipantIds() {
		return $this->assistingParticipantIds;
	}

	/**
	 * @return string
	 */
	public function getBuildingType() {
		return $this->buildingType;
	}

	/**
	 * @return int
	 */
	public function getCreatorId() {
		return $this->creatorId;
	}

	/**
	 * @return string
	 */
	public function getEventType() {
		return $this->eventType;
	}

	/**
	 * @return int
	 */
	public function getItemAfter() {
		return $this->itemAfter;
	}

	/**
	 * @return int
	 */
	public function getItemBefore() {
		return $this->itemBefore;
	}

	/**
	 * @return int
	 */
	public function getItemId() {
		return $this->itemId;
	}

	/**
	 * @return int
	 */
	public function getKillerId() {
		return $this->killerId;
	}

	/**
	 * @return string
	 */
	public function getLaneType() {
		return $this->laneType;
	}

	/**
	 * @return string
	 */
	public function getLevelUpType() {
		return $this->levelUpType;
	}

	/**
	 * @return string
	 */
	public function getMonsterType() {
		return $this->monsterType;
	}

	/**
	 * @return int
	 */
	public function getParticipantId() {
		return $this->participantId;
	}

	/**
	 * @return string
	 */
	public function getPointCaptured() {
		return $this->pointCaptured;
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
	public function getSkillSlot() {
		return $this->skillSlot;
	}

	/**
	 * @return int
	 */
	public function getTeamId() {
		return $this->teamId;
	}

	/**
	 * @return int
	 */
	public function getTimestamp() {
		return $this->timestamp;
	}

	/**
	 * @return string
	 */
	public function getTowerType() {
		return $this->towerType;
	}

	/**
	 * @return int
	 */
	public function getVictimId() {
		return $this->victimId;
	}

	/**
	 * @return string
	 */
	public function getWardType() {
		return $this->wardType;
	}
}