<?php
namespace RiotAPILib\Dto\lol_static_data;

use RiotAPILib\Dto\collection\DtoArrayList;

class Mastery {
	private $description;
	private $id;
	private $image;
	private $masteryTree, $name, $prereq;
	private $ranks;
	private $sanitizedDescription;

	/**
	 * Mastery constructor.
	 * @param $description
	 * @param $id
	 * @param $image
	 * @param $masteryTree
	 * @param $name
	 * @param $prereq
	 * @param $ranks
	 * @param $sanitizedDescription
	 */
	public function __construct($description, $id, $image, $masteryTree, $name, $prereq, $ranks,
								$sanitizedDescription) {
		$this->description = $description;
		$this->id = $id;
		$this->image = $image;
		$this->masteryTree = $masteryTree;
		$this->name = $name;
		$this->prereq = $prereq;
		$this->ranks = $ranks;
		$this->sanitizedDescription = $sanitizedDescription;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getDescription() {
		return $this->description;
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
	public function getMasteryTree() {
		return $this->masteryTree;
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
	public function getPrereq() {
		return $this->prereq;
	}

	/**
	 * @return int
	 */
	public function getRanks() {
		return $this->ranks;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getSanitizedDescription() {
		return $this->sanitizedDescription;
	}
}