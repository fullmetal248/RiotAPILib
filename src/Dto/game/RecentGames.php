<?php
namespace RiotAPILib\Dto;

use RiotAPILib\Dto\Collection\DtoArrayList;

class RecentGames {
	private $games;
	private $summonerId;

	/**
	 * RecentGames constructor.
	 * @param $games
	 * @param $summonerId
	 */
	public function __construct($games, $summonerId) {
		$this->games = $games;
		$this->summonerId = $summonerId;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getGames() {
		return $this->games;
	}

	/**
	 * @return int
	 */
	public function getSummonerId() {
		return $this->summonerId;
	}
}