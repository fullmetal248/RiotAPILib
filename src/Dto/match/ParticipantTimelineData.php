<?php
namespace RiotAPILib\Dto;

class ParticipantTimelineData {
	private $tenToTwenty, $thirtyToEnd, $twentyToThirty, $zeroToTen;

	/**
	 * ParticipantTimelineData constructor.
	 * @param $tenToTwenty
	 * @param $thirtyToEnd
	 * @param $twentyToThirty
	 * @param $zeroToTen
	 */
	public function __construct($tenToTwenty, $thirtyToEnd, $twentyToThirty, $zeroToTen) {
		$this->tenToTwenty = $tenToTwenty;
		$this->thirtyToEnd = $thirtyToEnd;
		$this->twentyToThirty = $twentyToThirty;
		$this->zeroToTen = $zeroToTen;
	}

	/**
	 * @return mixed
	 */
	public function getTenToTwenty() {
		return $this->tenToTwenty;
	}

	/**
	 * @return mixed
	 */
	public function getThirtyToEnd() {
		return $this->thirtyToEnd;
	}

	/**
	 * @return mixed
	 */
	public function getTwentyToThirty() {
		return $this->twentyToThirty;
	}

	/**
	 * @return mixed
	 */
	public function getZeroToTen() {
		return $this->zeroToTen;
	}

}