<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoMap;

class RuneList {
	private $basic;
	private $data;
	private $type, $version;

	/**
	 * RuneList constructor.
	 * @param $basic
	 * @param $data
	 * @param $type
	 * @param $version
	 */
	public function __construct($basic, $data, $type, $version) {
		$this->basic = $basic;
		$this->data = $data;
		$this->type = $type;
		$this->version = $version;
	}

	/**
	 * @return BasicData
	 */
	public function getBasic() {
		return $this->basic;
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