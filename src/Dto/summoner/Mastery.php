<?php
namespace RiotAPILib\Dto\summoner;

class Mastery {
	private $id;
	private $rank;

	/**
	 * Mastery constructor.
	 * @param $id
	 * @param $rank
	 */
	public function __construct($id, $rank) {
		$this->id = $id;
		$this->rank = $rank;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return int
	 */
	public function getRank() {
		return $this->rank;
	}
}