<?php
namespace RiotAPILib\Dto;

use RiotAPILib\Dto\Collection\DtoArrayList;
use RiotAPILib\Dto\Collection\DtoMap;

class Frame {
	private $events;
	private $participantFrames;
	private $timestamp;

	/**
	 * Frame constructor.
	 * @param $events
	 * @param $participantFrames
	 * @param $timespamp
	 */
	public function __construct($events, $participantFrames, $timespamp) {
		$this->events = $events;
		$this->participantFrames = $participantFrames;
		$this->timestamp = $timespamp;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getEvents() {
		return $this->events;
	}

	/**
	 * @return DtoMap
	 */
	public function getParticipantFrames() {
		return $this->participantFrames;
	}

	/**
	 * @return int
	 */
	public function getTimestamp() {
		return $this->timestamp;
	}

}