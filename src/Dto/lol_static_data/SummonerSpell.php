<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoArrayList;

class SummonerSpell {
	private $cooldown;
	private $cooldownBurn;
	private $cost;
	private $costBurn, $costType, $description;
	private $effect, $effectBurn;
	private $id;
	private $image;
	private $key;
	private $levelTip;
	private $maxRank;
	private $modes;
	private $name;
	private $range;
	private $rangeBurn, $resource, $sanitizedDescription, $sanitizedTooltip;
	private $summonerLevel;
	private $tooltip;
	private $vars;

	/**
	 * SummonerSpell constructor.
	 * @param $cooldown
	 * @param $cooldownBurn
	 * @param $cost
	 * @param $costBurn
	 * @param $costType
	 * @param $description
	 * @param $effect
	 * @param $effectBurn
	 * @param $id
	 * @param $image
	 * @param $key
	 * @param $levelTip
	 * @param $maxRank
	 * @param $modes
	 * @param $name
	 * @param $range
	 * @param $rangeBurn
	 * @param $resource
	 * @param $sanitizedDescription
	 * @param $sanitizedTooltip
	 * @param $summonerLevel
	 * @param $tooltip
	 * @param $vars
	 */
	public function __construct($cooldown, $cooldownBurn, $cost, $costBurn, $costType, $description, $effect,
								$effectBurn, $id, $image, $key, $levelTip, $maxRank, $modes, $name, $range, $rangeBurn,
								$resource, $sanitizedDescription, $sanitizedTooltip, $summonerLevel, $tooltip, $vars) {
		$this->cooldown = $cooldown;
		$this->cooldownBurn = $cooldownBurn;
		$this->cost = $cost;
		$this->costBurn = $costBurn;
		$this->costType = $costType;
		$this->description = $description;
		$this->effect = $effect;
		$this->effectBurn = $effectBurn;
		$this->id = $id;
		$this->image = $image;
		$this->key = $key;
		$this->levelTip = $levelTip;
		$this->maxRank = $maxRank;
		$this->modes = $modes;
		$this->name = $name;
		$this->range = $range;
		$this->rangeBurn = $rangeBurn;
		$this->resource = $resource;
		$this->sanitizedDescription = $sanitizedDescription;
		$this->sanitizedTooltip = $sanitizedTooltip;
		$this->summonerLevel = $summonerLevel;
		$this->tooltip = $tooltip;
		$this->vars = $vars;
	}


	/**
	 * @return DtoArrayList
	 */
	public function getCooldown() {
		return $this->cooldown;
	}

	/**
	 * @return string
	 */
	public function getCooldownBurn() {
		return $this->cooldownBurn;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getCost() {
		return $this->cost;
	}

	/**
	 * @return string
	 */
	public function getCostBurn() {
		return $this->costBurn;
	}

	/**
	 * @return string
	 */
	public function getCostType() {
		return $this->costType;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getEffect() {
		return $this->effect;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getEffectBurn() {
		return $this->effectBurn;
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
	 * @return string
	 */
	public function getKey() {
		return $this->key;
	}

	/**
	 * @return LevelTip
	 */
	public function getLevelTip() {
		return $this->levelTip;
	}

	/**
	 * @return int
	 */
	public function getMaxRank() {
		return $this->maxRank;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getModes() {
		return $this->modes;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return object
	 */
	public function getRange() {
		return $this->range;
	}

	/**
	 * @return string
	 */
	public function getRangeBurn() {
		return $this->rangeBurn;
	}

	/**
	 * @return string
	 */
	public function getResource() {
		return $this->resource;
	}

	/**
	 * @return string
	 */
	public function getSanitizedDescription() {
		return $this->sanitizedDescription;
	}

	/**
	 * @return string
	 */
	public function getSanitizedTooltip() {
		return $this->sanitizedTooltip;
	}

	/**
	 * @return int
	 */
	public function getSummonerLevel() {
		return $this->summonerLevel;
	}

	/**
	 * @return string
	 */
	public function getTooltip() {
		return $this->tooltip;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getVars() {
		return $this->vars;
	}
}