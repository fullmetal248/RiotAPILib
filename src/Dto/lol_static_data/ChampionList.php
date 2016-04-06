<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoMap;

class ChampionList {
	private $data;
	private $format;
	private $keys;
	private $type, $version;

	/**
	 * ChampionList constructor.
	 * @param $data
	 * @param $format
	 * @param $keys
	 * @param $type
	 * @param $version
	 */
	public function __construct($data, $format, $keys, $type, $version) {
		$this->data = $data;
		$this->format = $format;
		$this->keys = $keys;
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
	public function getFormat() {
		return $this->format;
	}

	/**
	 * @return DtoMap
	 */
	public function getKeys() {
		return $this->keys;
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