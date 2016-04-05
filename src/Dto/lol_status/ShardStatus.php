<?php
namespace RiotAPILib\Dto\lol_status;

use RiotAPILib\Dto\collection\DtoArrayList;

class ShardStatus {
	private $hostName;
	private $locales;
	private $name, $regionTag;
	private $services;
	private $slug;

	/**
	 * ShardStatus constructor.
	 * @param $hostName
	 * @param $locales
	 * @param $name
	 * @param $regionTag
	 * @param $services
	 * @param $slug
	 */
	public function __construct($hostName, $locales, $name, $regionTag, $services, $slug) {
		$this->hostName = $hostName;
		$this->locales = $locales;
		$this->name = $name;
		$this->regionTag = $regionTag;
		$this->services = $services;
		$this->slug = $slug;
	}

	/**
	 * @return string
	 */
	public function getHostName() {
		return $this->hostName;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getLocales() {
		return $this->locales;
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
	public function getRegionTag() {
		return $this->regionTag;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getServices() {
		return $this->services;
	}

	/**
	 * @return string
	 */
	public function getSlug() {
		return $this->slug;
	}

}