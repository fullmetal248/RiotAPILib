<?php
namespace RiotAPILib\Dto;

use RiotAPILib\Dto\collection\DtoArrayList;

class FeaturedGames {
	private $clientRefreshInterval;
	private $gameList;

	/**
	 * FeaturedGames constructor.
	 * @param $clientRefreshInterval
	 * @param $gameList
	 */
	public function __construct($clientRefreshInterval, $gameList) {
		$this->clientRefreshInterval = $clientRefreshInterval;
		$this->gameList = $gameList;
	}

	/**
	 * @return int
	 */
	public function getClientRefreshInterval() {
		return $this->clientRefreshInterval;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getGameList() {
		return $this->gameList;
	}

}