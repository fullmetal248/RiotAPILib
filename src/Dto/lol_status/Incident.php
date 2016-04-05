<?php
namespace RiotAPILib\Dto\lol_status;

use RiotAPILib\Dto\collection\DtoArrayList;

class Incident {
	private $isActive;
	private $createdAt;
	private $id;
	private $updates;

	/**
	 * Incident constructor.
	 * @param $isActive
	 * @param $createdAt
	 * @param $id
	 * @param $updates
	 */
	public function __construct($isActive, $createdAt, $id, $updates) {
		$this->isActive = $isActive;
		$this->createdAt = $createdAt;
		$this->id = $id;
		$this->updates = $updates;
	}

	/**
	 * @return boolean
	 */
	public function getIsActive() {
		return $this->isActive;
	}

	/**
	 * @return string
	 */
	public function getCreatedAt() {
		return $this->createdAt;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getUpdates() {
		return $this->updates;
	}

}