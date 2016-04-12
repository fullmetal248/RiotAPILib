<?php namespace RiotAPILib;
class EndPointsTable {
	private $endpoints = [];

	const BR = 0;
	const EUNE = 1;
	const EUW = 2;
	const KR = 3;
	const LAN = 4;
	const LAS = 5;
	const NA = 6;
	const OCE = 7;
	const TR = 8;
	const RU = 9;
	const JP = 10;
	const PBE = 20;
	const GlobalStatic = 21;

	public static function getInstance() {
		static $instance = null;
		if ($instance === null) {
			$instance = new self();

			$instance->endpoints[EndPointsTable::BR] = new EndPoint("BR1", "br", "br.api.pvp.net");
			$instance->endpoints[EndPointsTable::EUNE] = new EndPoint("EUN1", "eune", "eune.api.pvp.net");
			$instance->endpoints[EndPointsTable::EUW] = new EndPoint("EUW1", "euw", "euw.api.pvp.net");
			$instance->endpoints[EndPointsTable::KR] = new EndPoint("KR", "kr", "kr.api.pvp.net");
			$instance->endpoints[EndPointsTable::LAN] = new EndPoint("LA1", "lan", "lan.api.pvp.net");
			$instance->endpoints[EndPointsTable::LAS] = new EndPoint("LA2", "las", "las.api.pvp.net");
			$instance->endpoints[EndPointsTable::NA] = new EndPoint("NA1", "na", "na.api.pvp.net");
			$instance->endpoints[EndPointsTable::OCE] = new EndPoint("OC1", "oce", "oce.api.pvp.net");
			$instance->endpoints[EndPointsTable::TR] = new EndPoint("TR1", "tr", "tr.api.pvp.net");
			$instance->endpoints[EndPointsTable::RU] = new EndPoint("RU", "ru", "ru.api.pvp.net");
			$instance->endpoints[EndPointsTable::JP] = new EndPoint("JP", "jp", "jp.api.pvp.net");
			$instance->endpoints[EndPointsTable::PBE] = new EndPoint("PBE1", "", "pbe.api.pvp.net");
			$instance->endpoints[EndPointsTable::GlobalStatic] = new EndPoint("", "", "global.api.pvp.net");
		}
		return $instance;
	}

	/**
	 * @param $idx
	 * @return EndPoint
	 */
	public function get($idx) {
		return $this->endpoints[$idx];
	}
}

class EndPoint {
	private $platformId, $regionId, $hostUrl;

	/**
	 * EndPoint constructor.
	 * @param $platformId
	 * @param $regionId
	 * @param $hostUrl
	 */
	public function __construct($platformId, $regionId, $hostUrl) {
		$this->platformId = $platformId;
		$this->regionId = $regionId;
		$this->hostUrl = $hostUrl;
	}

	/**
	 * @return string PlatformID
	 */
	public function getPlatformId() {
		return $this->platformId;
	}

	/**
	 * @return string
	 */
	public function getRegionId() {
		return $this->regionId;
	}

	/**
	 * @return string Host URL
	 */
	public function getHostUrl() {
		return $this->hostUrl;
	}
}