<?php
namespace RiotAPILib\Dto\stats;

class PlayerStatsSummary {
	private $aggregatedStats;
	private $losses;
	private $modifyDate;
	private $playerStatSummaryType;
	private $wins;

	/**
	 * PlayerStatsSummary constructor.
	 * @param $aggregatedStats
	 * @param $losses
	 * @param $modifyDate
	 * @param $playerStatSummaryType
	 * @param $wins
	 */
	public function __construct($aggregatedStats, $losses, $modifyDate, $playerStatSummaryType, $wins) {
		$this->aggregatedStats = $aggregatedStats;
		$this->losses = $losses;
		$this->modifyDate = $modifyDate;
		$this->playerStatSummaryType = $playerStatSummaryType;
		$this->wins = $wins;
	}

	/**
	 * @return AggregatedStats
	 */
	public function getAggregatedStats() {
		return $this->aggregatedStats;
	}

	/**
	 * @return int
	 */
	public function getLosses() {
		return $this->losses;
	}

	/**
	 * @return int
	 */
	public function getModifyDate() {
		return $this->modifyDate;
	}

	/**
	 * @return string
	 */
	public function getPlayerStatSummaryType() {
		return $this->playerStatSummaryType;
	}

	/**
	 * @return int
	 */
	public function getWins() {
		return $this->wins;
	}
}