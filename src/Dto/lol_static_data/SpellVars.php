<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoArrayList;

class SpellVars {
	private $coeff;
	private $dyn, $key, $link, $ranksWith;

	/**
	 * SpellVars constructor.
	 * @param $coeff
	 * @param $dyn
	 * @param $key
	 * @param $link
	 * @param $ranksWith
	 */
	public function __construct($coeff, $dyn, $key, $link, $ranksWith) {
		$this->coeff = $coeff;
		$this->dyn = $dyn;
		$this->key = $key;
		$this->link = $link;
		$this->ranksWith = $ranksWith;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getCoeff() {
		return $this->coeff;
	}

	/**
	 * @return string
	 */
	public function getDyn() {
		return $this->dyn;
	}

	/**
	 * @return string
	 */
	public function getKey() {
		return $this->key;
	}

	/**
	 * @return string
	 */
	public function getLink() {
		return $this->link;
	}

	/**
	 * @return string
	 */
	public function getRanksWith() {
		return $this->ranksWith;
	}

}