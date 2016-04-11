<?php
namespace RiotAPILib\Dto\summoner;

class RuneSlot {
	private $runeId, $runeSlotId;

	/**
	 * RuneSlot constructor.
	 * @param $runeId
	 * @param $runeSlotId
	 */
	public function __construct($runeId, $runeSlotId) {
		$this->runeId = $runeId;
		$this->runeSlotId = $runeSlotId;
	}

	/**
	 * @return int
	 */
	public function getRuneId() {
		return $this->runeId;
	}

	/**
	 * @return int
	 */
	public function getRuneSlotId() {
		return $this->runeSlotId;
	}
}