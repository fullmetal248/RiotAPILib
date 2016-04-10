<?php
namespace RiotAPILib\Dto\match_list;

use RiotAPILib\Dto\collection\DtoArrayList;

class MatchList {
	private $endIndex;
	private $matches;
	private $startIndex, $totalGames;

	/**
	 * MatchList constructor.
	 * @param $endIndex
	 * @param $matches
	 * @param $startIndex
	 * @param $totalGames
	 */
	public function __construct($endIndex, $matches, $startIndex, $totalGames) {
		$this->endIndex = $endIndex;
		$this->matches = $matches;
		$this->startIndex = $startIndex;
		$this->totalGames = $totalGames;
	}

	/**
	 * @return int
	 */
	public function getEndIndex() {
		return $this->endIndex;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getMatches() {
		return $this->matches;
	}

	/**
	 * @return int
	 */
	public function getStartIndex() {
		return $this->startIndex;
	}

	/**
	 * @return int
	 */
	public function getTotalGames() {
		return $this->totalGames;
	}
}