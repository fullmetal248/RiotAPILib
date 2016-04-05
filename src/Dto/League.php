<?php
namespace RiotAPILib\Dto;

use RiotAPILib\Dto\Collection\DtoArrayList;

class League {
	private $entries;
	private $name, $participantId, $queue, $tier;

	/**
	 * League constructor.
	 * @param $entries
	 * @param $name
	 * @param $participantId
	 * @param $queue
	 * @param $tier
	 */
	public function __construct($entries, $name, $participantId, $queue, $tier) {
		$this->entries = $entries;
		$this->name = $name;
		$this->participantId = $participantId;
		$this->queue = $queue;
		$this->tier = $tier;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getEntries() {
		return $this->entries;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getParticipantId() {
		return $this->participantId;
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
	public function getTier() {
		return $this->tier;
	}
}