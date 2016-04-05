<?php
namespace RiotAPILib\Dto;

class Position {
	private $x, $y;

	/**
	 * Position constructor.
	 * @param $x
	 * @param $y
	 */
	public function __construct($x, $y) {
		$this->x = $x;
		$this->y = $y;
	}

	/**
	 * @return mixed
	 */
	public function getX() {
		return $this->x;
	}

	/**
	 * @return mixed
	 */
	public function getY() {
		return $this->y;
	}

}