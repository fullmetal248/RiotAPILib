<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoMap;

class Realm {
	private $cdn, $css, $dd, $l, $lg;
	private $n;
	private $profileIconMax;
	private $store, $v;

	/**
	 * Realm constructor.
	 * @param $cdn
	 * @param $css
	 * @param $dd
	 * @param $l
	 * @param $lg
	 * @param $n
	 * @param $profileIconMax
	 * @param $store
	 * @param $v
	 */
	public function __construct($cdn, $css, $dd, $l, $lg, $n, $profileIconMax, $store, $v) {
		$this->cdn = $cdn;
		$this->css = $css;
		$this->dd = $dd;
		$this->l = $l;
		$this->lg = $lg;
		$this->n = $n;
		$this->profileIconMax = $profileIconMax;
		$this->store = $store;
		$this->v = $v;
	}

	/**
	 * @return string
	 */
	public function getCdn() {
		return $this->cdn;
	}

	/**
	 * @return string
	 */
	public function getCss() {
		return $this->css;
	}

	/**
	 * @return string
	 */
	public function getDd() {
		return $this->dd;
	}

	/**
	 * @return string
	 */
	public function getL() {
		return $this->l;
	}

	/**
	 * @return string
	 */
	public function getLg() {
		return $this->lg;
	}

	/**
	 * @return DtoMap
	 */
	public function getN() {
		return $this->n;
	}

	/**
	 * @return int
	 */
	public function getProfileIconMax() {
		return $this->profileIconMax;
	}

	/**
	 * @return string
	 */
	public function getStore() {
		return $this->store;
	}

	/**
	 * @return string
	 */
	public function getV() {
		return $this->v;
	}
}