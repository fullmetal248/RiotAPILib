<?php
namespace RiotAPILib\Dto\lol_status;

use RiotAPILib\Dto\collection\DtoArrayList;

class Service {
	private $incidents;
	private $name, $slug, $status;

	/**
	 * Service constructor.
	 * @param $incidents
	 * @param $name
	 * @param $slug
	 * @param $status
	 */
	public function __construct($incidents, $name, $slug, $status) {
		$this->incidents = $incidents;
		$this->name = $name;
		$this->slug = $slug;
		$this->status = $status;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getIncidents() {
		return $this->incidents;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getSlug() {
		return $this->slug;
	}

	/**
	 * @return string
	 */
	public function getStatus() {
		return $this->status;
	}

}