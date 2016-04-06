<?php
/**
 * Created by PhpStorm.
 * User: TOMO
 * Date: 2016/04/06
 * Time: 18:16
 */

namespace RiotAPILib\Dto\lol_static_data;


class Info {
	private $attack, $defense, $difficulty, $magic;

	/**
	 * Info constructor.
	 * @param $attack
	 * @param $defense
	 * @param $difficulty
	 * @param $magic
	 */
	public function __construct($attack, $defense, $difficulty, $magic) {
		$this->attack = $attack;
		$this->defense = $defense;
		$this->difficulty = $difficulty;
		$this->magic = $magic;
	}

	/**
	 * @return int
	 */
	public function getAttack() {
		return $this->attack;
	}

	/**
	 * @return int
	 */
	public function getDefense() {
		return $this->defense;
	}

	/**
	 * @return int
	 */
	public function getDifficulty() {
		return $this->difficulty;
	}

	/**
	 * @return int
	 */
	public function getMagic() {
		return $this->magic;
	}

}