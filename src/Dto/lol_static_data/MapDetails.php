<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoArrayList;

class MapDetails {
	private $image;
	private $mapId;
	private $mapName;
	private $unpurchasableItemList;

	/**
	 * MapDetails constructor.
	 * @param $image
	 * @param $mapId
	 * @param $mapName
	 * @param $unpurchasableItemList
	 */
	public function __construct($image, $mapId, $mapName, $unpurchasableItemList) {
		$this->image = $image;
		$this->mapId = $mapId;
		$this->mapName = $mapName;
		$this->unpurchasableItemList = $unpurchasableItemList;
	}

	/**
	 * @return Image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * @return int
	 */
	public function getMapId() {
		return $this->mapId;
	}

	/**
	 * @return string
	 */
	public function getMapName() {
		return $this->mapName;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getUnpurchasableItemList() {
		return $this->unpurchasableItemList;
	}

}