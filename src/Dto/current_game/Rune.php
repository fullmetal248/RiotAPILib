<?php
namespace RiotAPILib\Dto\current_game;

class Rune {
	private $count;
	private $runeId;

	/**
	 * Rune constructor.
	 * @param $count
	 * @param $runeId
	 */
	public function __construct($count, $runeId) {
		$this->count = $count;
		$this->runeId = $runeId;
	}

	/**
	 * @return int
	 */
	public function getCount() {
		return $this->count;
	}

	/**
	 * @return int
	 */
	public function getRuneId() {
		return $this->runeId;
	}
}