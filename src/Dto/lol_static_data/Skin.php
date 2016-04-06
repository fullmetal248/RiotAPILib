<?php
namespace RiotAPILib\Dto\lol_static_data;

class Skin {
	private $id;
	private $name;
	private $num;

	/**
	 * Skin constructor.
	 * @param $int
	 * @param $name
	 * @param $num
	 */
	public function __construct($int, $name, $num) {
		$this->id = $int;
		$this->name = $name;
		$this->num = $num;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return int
	 */
	public function getNum() {
		return $this->num;
	}
}