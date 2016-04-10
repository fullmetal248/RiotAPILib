<?php
/**
 * Created by PhpStorm.
 * User: TOMO
 * Date: 2016/04/10
 * Time: 18:50
 */

namespace RiotAPILib\Dto\stats;


use RiotAPILib\Dto\collection\DtoArrayList;

class PlayerStatsSummaryList {
	private $playerStatSummaries;
	private $summonerId;

	/**
	 * PlayerStatsSummaryList constructor.
	 * @param $playerStatSummaries
	 * @param $summonerId
	 */
	public function __construct($playerStatSummaries, $summonerId) {
		$this->playerStatSummaries = $playerStatSummaries;
		$this->summonerId = $summonerId;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getPlayerStatSummaries() {
		return $this->playerStatSummaries;
	}

	/**
	 * @return int
	 */
	public function getSummonerId() {
		return $this->summonerId;
	}
}