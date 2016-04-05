<?php
namespace RiotAPILib\Dto;

class MiniSeries {
	private $losses;
	private $progress;
	private $target, $wins;

	/**
	 * MiniSeries constructor.
	 * @param $losses
	 * @param $progress
	 * @param $target
	 * @param $wins
	 */
	public function __construct($losses, $progress, $target, $wins) {
		$this->losses = $losses;
		$this->progress = $progress;
		$this->target = $target;
		$this->wins = $wins;
	}

	/**
	 * @return int
	 */
	public function getLosses() {
		return $this->losses;
	}

	/**
	 * @return string
	 */
	public function getProgress() {
		return $this->progress;
	}

	/**
	 * @return int
	 */
	public function getTarget() {
		return $this->target;
	}

	/**
	 * @return int
	 */
	public function getWins() {
		return $this->wins;
	}
}