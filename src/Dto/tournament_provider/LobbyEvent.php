<?php
namespace RiotAPILib\Dto\tournament_provider;

class LobbyEvent {
	private $eventType, $summonerId, $timestamp;

	/**
	 * LobbyEvent constructor.
	 * @param $eventType
	 * @param $summonerId
	 * @param $timestamp
	 */
	public function __construct($eventType, $summonerId, $timestamp) {
		$this->eventType = $eventType;
		$this->summonerId = $summonerId;
		$this->timestamp = $timestamp;
	}

	/**
	 * @return string
	 */
	public function getEventType() {
		return $this->eventType;
	}

	/**
	 * @return string
	 */
	public function getSummonerId() {
		return $this->summonerId;
	}

	/**
	 * @return string
	 */
	public function getTimestamp() {
		return $this->timestamp;
	}
}