<?php
namespace RiotAPILib\Dto\summoner;

use RiotAPILib\Dto\collection\DtoArrayList;

class MasteryPages {
	private $pages;
	private $summonerId;

	/**
	 * MasteryPages constructor.
	 * @param $pages
	 * @param $summonerId
	 */
	public function __construct($pages, $summonerId) {
		$this->pages = $pages;
		$this->summonerId = $summonerId;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getPages() {
		return $this->pages;
	}

	/**
	 * @return int
	 */
	public function getSummonerId() {
		return $this->summonerId;
	}
}