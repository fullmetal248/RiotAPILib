<?php
namespace RiotAPILib\Dto\lol_static_data;

class Passive {
	private $description;
	private $image;
	private $name, $sanitizedDescription;

	/**
	 * Passive constructor.
	 * @param $description
	 * @param $image
	 * @param $name
	 * @param $sanitizedDescription
	 */
	public function __construct($description, $image, $name, $sanitizedDescription) {
		$this->description = $description;
		$this->image = $image;
		$this->name = $name;
		$this->sanitizedDescription = $sanitizedDescription;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
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
	public function getName() {
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getSanitizedDescription() {
		return $this->sanitizedDescription;
	}

}