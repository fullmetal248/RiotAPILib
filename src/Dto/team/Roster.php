<?php
namespace RiotAPILib\Dto\team;

use RiotAPILib\Dto\collection\DtoArrayList;

class Roster {
	private $memberList;
	private $ownerId;

	/**
	 * Roster constructor.
	 * @param $memberList
	 * @param $ownerId
	 */
	public function __construct($memberList, $ownerId) {
		$this->memberList = $memberList;
		$this->ownerId = $ownerId;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getMemberList() {
		return $this->memberList;
	}

	/**
	 * @return int
	 */
	public function getOwnerId() {
		return $this->ownerId;
	}
}