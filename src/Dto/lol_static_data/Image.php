<?php
namespace RiotAPILib\Dto\lol_static_data;

class Image {
	private $full, $group;
	private $h;
	private $sprite;
	private $w, $x, $y;

	/**
	 * Image constructor.
	 * @param $full
	 * @param $group
	 * @param $h
	 * @param $sprite
	 * @param $w
	 * @param $x
	 * @param $y
	 */
	public function __construct($full, $group, $h, $sprite, $w, $x, $y) {
		$this->full = $full;
		$this->group = $group;
		$this->h = $h;
		$this->sprite = $sprite;
		$this->w = $w;
		$this->x = $x;
		$this->y = $y;
	}

	/**
	 * @return string
	 */
	public function getFull() {
		return $this->full;
	}

	/**
	 * @return string
	 */
	public function getGroup() {
		return $this->group;
	}

	/**
	 * @return int
	 */
	public function getH() {
		return $this->h;
	}

	/**
	 * @return string
	 */
	public function getSprite() {
		return $this->sprite;
	}

	/**
	 * @return int
	 */
	public function getW() {
		return $this->w;
	}

	/**
	 * @return int
	 */
	public function getX() {
		return $this->x;
	}

	/**
	 * @return int
	 */
	public function getY() {
		return $this->y;
	}
}