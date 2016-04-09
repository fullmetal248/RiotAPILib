<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoMap;

class MapData {
	private $data;
	private $type, $version;

	/**
	 * MapData constructor.
	 * @param $data
	 * @param $type
	 * @param $version
	 */
	public function __construct($data, $type, $version) {
		$this->data = $data;
		$this->type = $type;
		$this->version = $version;
	}

	/**
	 * @return DtoMap
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @return string
	 */
	public function getVersion() {
		return $this->version;
	}
}