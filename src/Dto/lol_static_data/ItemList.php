<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoArrayList;
use RiotAPILib\Dto\collection\DtoMap;

class ItemList {
	private $basic;
	private $data;
	private $groups;
	private $tree;
	private $type, $version;

	/**
	 * ItemList constructor.
	 * @param $basic
	 * @param $data
	 * @param $groups
	 * @param $tree
	 * @param $type
	 * @param $version
	 */
	public function __construct($basic, $data, $groups, $tree, $type, $version) {
		$this->basic = $basic;
		$this->data = $data;
		$this->groups = $groups;
		$this->tree = $tree;
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
	 * @return DtoArrayList
	 */
	public function getGroups() {
		return $this->groups;
	}

	/**
	 * @return DtoMap
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