<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoMap;

class MasteryList {
	private $data;
	private $tree;
	private $type, $version;

	/**
	 * MasteryList constructor.
	 * @param $data
	 * @param $tree
	 * @param $type
	 * @param $version
	 */
	public function __construct($data, $tree, $type, $version) {
		$this->data = $data;
		$this->tree = $tree;
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
	 * @return MasteryTree
	 */
	public function getTree() {
		return $this->tree;
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