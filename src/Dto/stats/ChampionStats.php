<?php
namespace RiotAPILib\Dto\stats;

class ChampionStats {
	private $id;
	private $stats;

	/**
	 * ChampionStats constructor.
	 * @param $id
	 * @param $stats
	 */
	public function __construct($id, $stats) {
		$this->id = $id;
		$this->stats = $stats;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return AggregatedStats
	 */
	public function getStats() {
		return $this->stats;
	}
}