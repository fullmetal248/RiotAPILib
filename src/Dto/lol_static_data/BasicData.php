<?php
/**
 * Created by PhpStorm.
 * User: TOMO
 * Date: 2016/04/07
 * Time: 13:26
 */

namespace RiotAPILib\Dto\lol_static_data;


use RiotAPILib\Dto\collection\DtoArrayList;
use RiotAPILib\Dto\collection\DtoMap;

class BasicData {
	private $colloq;
	private $isConsumeOnFull, $isConsumed;
	private $depth;
	private $description;
	private $from;
	private $gold;
	private $group;
	private $isHideFromAll;
	private $id;
	private $image;
	private $isInStore;
	private $into;
	private $maps;
	private $name, $plaintext, $requiredChampion;
	private $rune;
	private $sanitizedDescription;
	private $specialRecipe, $stacks;
	private $stats;
	private $tags;

	/**
	 * BasicData constructor.
	 * @param $colloq
	 * @param $isConsumeOnFull
	 * @param $isConsumed
	 * @param $depth
	 * @param $description
	 * @param $from
	 * @param $gold
	 * @param $group
	 * @param $isHideFromAll
	 * @param $id
	 * @param $image
	 * @param $isInStore
	 * @param $into
	 * @param $maps
	 * @param $name
	 * @param $plaintext
	 * @param $requiredChampion
	 * @param $rune
	 * @param $sanitizedDescription
	 * @param $specialRecipe
	 * @param $stacks
	 * @param $stats
	 * @param $tags
	 */
	public function __construct($colloq, $isConsumeOnFull, $isConsumed, $depth, $description, $from, $gold, $group,
								$isHideFromAll, $id, $image, $isInStore, $into, $maps, $name, $plaintext,
								$requiredChampion, $rune, $sanitizedDescription, $specialRecipe, $stacks, $stats,
								$tags) {
		$this->colloq = $colloq;
		$this->isConsumeOnFull = $isConsumeOnFull;
		$this->isConsumed = $isConsumed;
		$this->depth = $depth;
		$this->description = $description;
		$this->from = $from;
		$this->gold = $gold;
		$this->group = $group;
		$this->isHideFromAll = $isHideFromAll;
		$this->id = $id;
		$this->image = $image;
		$this->isInStore = $isInStore;
		$this->into = $into;
		$this->maps = $maps;
		$this->name = $name;
		$this->plaintext = $plaintext;
		$this->requiredChampion = $requiredChampion;
		$this->rune = $rune;
		$this->sanitizedDescription = $sanitizedDescription;
		$this->specialRecipe = $specialRecipe;
		$this->stacks = $stacks;
		$this->stats = $stats;
		$this->tags = $tags;
	}

	/**
	 * @return string
	 */
	public function getColloq() {
		return $this->colloq;
	}

	/**
	 * @return boolean
	 */
	public function getIsConsumeOnFull() {
		return $this->isConsumeOnFull;
	}

	/**
	 * @return boolean
	 */
	public function getIsConsumed() {
		return $this->isConsumed;
	}

	/**
	 * @return int
	 */
	public function getDepth() {
		return $this->depth;
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
	public function getFrom() {
		return $this->from;
	}

	/**
	 * @return Gold
	 */
	public function getGold() {
		return $this->gold;
	}

	/**
	 * @return string
	 */
	public function getGroup() {
		return $this->group;
	}

	/**
	 * @return boolean
	 */
	public function getIsHideFromAll() {
		return $this->isHideFromAll;
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
	 * @return boolean
	 */
	public function getIsInStore() {
		return $this->isInStore;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getInto() {
		return $this->into;
	}

	/**
	 * @return DtoMap
	 */
	public function getMaps() {
		return $this->maps;
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
	public function getPlaintext() {
		return $this->plaintext;
	}

	/**
	 * @return string
	 */
	public function getRequiredChampion() {
		return $this->requiredChampion;
	}

	/**
	 * @return MetaData
	 */
	public function getRune() {
		return $this->rune;
	}

	/**
	 * @return string
	 */
	public function getSanitizedDescription() {
		return $this->sanitizedDescription;
	}

	/**
	 * @return int
	 */
	public function getSpecialRecipe() {
		return $this->specialRecipe;
	}

	/**
	 * @return int
	 */
	public function getStacks() {
		return $this->stacks;
	}

	/**
	 * @return BasicDataStats
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
}