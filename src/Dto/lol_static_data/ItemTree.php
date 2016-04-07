<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoArrayList;

class ItemTree {
	private $header;
	private $tags;

	/**
	 * ItemTree constructor.
	 * @param $header
	 * @param $tags
	 */
	public function __construct($header, $tags) {
		$this->header = $header;
		$this->tags = $tags;
	}

	/**
	 * @return string
	 */
	public function getHeader() {
		return $this->header;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getTags() {
		return $this->tags;
	}
}