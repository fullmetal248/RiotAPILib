<?php
/**
 * Created by PhpStorm.
 * User: TOMO
 * Date: 2016/04/06
 * Time: 18:10
 */

namespace RiotAPILib\Dto\lol_static_data;


use RiotAPILib\Dto\collection\DtoArrayList;

class Recommended {
	private $blocks;
	private $champion, $map, $mode;
	private $isPriority;
	private $title, $type;

	/**
	 * Recommended constructor.
	 * @param $blocks
	 * @param $champion
	 * @param $map
	 * @param $mode
	 * @param $isPriority
	 * @param $title
	 * @param $type
	 */
	public function __construct($blocks, $champion, $map, $mode, $isPriority, $title, $type) {
		$this->blocks = $blocks;
		$this->champion = $champion;
		$this->map = $map;
		$this->mode = $mode;
		$this->isPriority = $isPriority;
		$this->title = $title;
		$this->type = $type;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getBlocks() {
		return $this->blocks;
	}

	/**
	 * @return string
	 */
	public function getChampion() {
		return $this->champion;
	}

	/**
	 * @return string
	 */
	public function getMap() {
		return $this->map;
	}

	/**
	 * @return string
	 */
	public function getMode() {
		return $this->mode;
	}

	/**
	 * @return boolean
	 */
	public function getIsPriority() {
		return $this->isPriority;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

}