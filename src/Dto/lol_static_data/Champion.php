<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoArrayList;

class Champion {
	private $allytips;
	private $blurb;
	private $enemytips;
	private $id;
	private $image;
	private $info;
	private $key, $lore, $name, $partype;
	private $passive;
	private $recommended;
	private $skins;
	private $spells;
	private $stats;
	private $tags;
	private $title;

	/**
	 * Champion constructor.
	 * @param $allytips
	 * @param $blurb
	 * @param $enemytips
	 * @param $id
	 * @param $image
	 * @param $info
	 * @param $key
	 * @param $lore
	 * @param $name
	 * @param $partype
	 * @param $passive
	 * @param $recommended
	 * @param $skins
	 * @param $spells
	 * @param $stats
	 * @param $tags
	 * @param $title
	 */
	public function __construct($allytips, $blurb, $enemytips, $id, $image, $info, $key, $lore, $name, $partype,
								$passive, $recommended, $skins, $spells, $stats, $tags, $title) {
		$this->allytips = $allytips;
		$this->blurb = $blurb;
		$this->enemytips = $enemytips;
		$this->id = $id;
		$this->image = $image;
		$this->info = $info;
		$this->key = $key;
		$this->lore = $lore;
		$this->name = $name;
		$this->partype = $partype;
		$this->passive = $passive;
		$this->recommended = $recommended;
		$this->skins = $skins;
		$this->spells = $spells;
		$this->stats = $stats;
		$this->tags = $tags;
		$this->title = $title;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getAllytips() {
		return $this->allytips;
	}

	/**
	 * @return string
	 */
	public function getBlurb() {
		return $this->blurb;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getEnemytips() {
		return $this->enemytips;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return Image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * @return Info
	 */
	public function getInfo() {
		return $this->info;
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
	public function getLore() {
		return $this->lore;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getPartype() {
		return $this->partype;
	}

	/**
	 * @return Passive
	 */
	public function getPassive() {
		return $this->passive;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getRecommended() {
		return $this->recommended;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getSkins() {
		return $this->skins;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getSpells() {
		return $this->spells;
	}

	/**
	 * @return Stats
	 */
	public function getStats() {
		return $this->stats;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getTags() {
		return $this->tags;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}
}