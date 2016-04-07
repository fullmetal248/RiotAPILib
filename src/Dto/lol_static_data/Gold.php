<?php
namespace RiotAPILib\Dto\lol_static_data;

class Gold {
	private $base;
	private $isPurchasable;
	private $sell, $total;

	/**
	 * Gold constructor.
	 * @param $base
	 * @param $isPurchasable
	 * @param $sell
	 * @param $total
	 */
	public function __construct($base, $isPurchasable, $sell, $total) {
		$this->base = $base;
		$this->isPurchasable = $isPurchasable;
		$this->sell = $sell;
		$this->total = $total;
	}

	/**
	 * @return int
	 */
	public function getBase() {
		return $this->base;
	}

	/**
	 * @return boolean
	 */
	public function getIsPurchasable() {
		return $this->isPurchasable;
	}

	/**
	 * @return int
	 */
	public function getSell() {
		return $this->sell;
	}

	/**
	 * @return int
	 */
	public function getTotal() {
		return $this->total;
	}
}