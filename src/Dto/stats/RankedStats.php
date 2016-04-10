<?php
namespace RiotAPILib\Dto\stats;

use RiotAPILib\Dto\collection\DtoArrayList;

class RankedStats {
	private $champions;
	private $modifyDate, $summonerId;

	/**
	 * RankedStats constructor.
	 * @param $champions
	 * @param $modifyDate
	 * @param $summonerId
	 */
	public function __construct($champions, $modifyDate, $summonerId) {
		$this->champions = $champions;
		$this->modifyDate = $modifyDate;
		$this->summonerId = $summonerId;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getChampions() {
		return $this->champions;
	}

	/**
	 * @return int
	 */
	public function getModifyDate() {
		return $this->modifyDate;
	}

	/**
	 * @return int
	 */
	public function getSummonerId() {
		return $this->summonerId;
	}
}