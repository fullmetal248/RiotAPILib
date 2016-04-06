<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoArrayList;

class ChampionSpell {
	private $altimages;
	private $cooldown;
	private $cooldownBurn;
	private $cost;
	private $costBurn, $costType, $description;
	private $effect;
	private $effectBurn;
	private $image;
	private $key;
	private $leveltip;
	private $maxrank;
	private $name;
	private $range;
	private $rangeBurn, $resource, $sanitizedDescription, $sanitizedTooltip, $tooltip;
	private $vars;

	/**
	 * ChampionSpell constructor.
	 * @param $altimages
	 * @param $cooldown
	 * @param $cooldownBurn
	 * @param $cost
	 * @param $costBurn
	 * @param $costType
	 * @param $description
	 * @param $effect
	 * @param $effectBurn
	 * @param $image
	 * @param $key
	 * @param $leveltip
	 * @param $maxrank
	 * @param $name
	 * @param $range
	 * @param $rangeBurn
	 * @param $resource
	 * @param $sanitizedDescription
	 * @param $sanitizedTooltip
	 * @param $tooltip
	 * @param $vars
	 */
	public function __construct($altimages, $cooldown, $cooldownBurn, $cost, $costBurn, $costType, $description,
								$effect, $effectBurn, $image, $key, $leveltip, $maxrank, $name, $range, $rangeBurn,
								$resource, $sanitizedDescription, $sanitizedTooltip, $tooltip, $vars) {
		$this->altimages = $altimages;
		$this->cooldown = $cooldown;
		$this->cooldownBurn = $cooldownBurn;
		$this->cost = $cost;
		$this->costBurn = $costBurn;
		$this->costType = $costType;
		$this->description = $description;
		$this->effect = $effect;
		$this->effectBurn = $effectBurn;
		$this->image = $image;
		$this->key = $key;
		$this->leveltip = $leveltip;
		$this->maxrank = $maxrank;
		$this->name = $name;
		$this->range = $range;
		$this->rangeBurn = $rangeBurn;
		$this->resource = $resource;
		$this->sanitizedDescription = $sanitizedDescription;
		$this->sanitizedTooltip = $sanitizedTooltip;
		$this->tooltip = $tooltip;
		$this->vars = $vars;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getAltimages() {
		return $this->altimages;
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
	public function getLeveltip() {
		return $this->leveltip;
	}

	/**
	 * @return int
	 */
	public function getMaxrank() {
		return $this->maxrank;
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