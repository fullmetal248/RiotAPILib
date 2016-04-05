<?php

namespace RiotAPILib\Dto\champion;


class Champion {
	private $isActive, $isBotEnabled, $isBotMmEnabled, $isFreeToPlay;
	private $id;
	private $isRankedPlayEnabled;

	/**
	 * champion constructor.
	 * @param $isActive
	 * @param $isBotEnabled
	 * @param $isBotMmEnabled
	 * @param $isFreeToPlay
	 * @param $id
	 * @param $isRankedPlayEnabled
	 */
	public function __construct($isActive, $isBotEnabled, $isBotMmEnabled, $isFreeToPlay, $id, $isRankedPlayEnabled) {
		$this->isActive = $isActive;
		$this->isBotEnabled = $isBotEnabled;
		$this->isBotMmEnabled = $isBotMmEnabled;
		$this->isFreeToPlay = $isFreeToPlay;
		$this->id = $id;
		$this->isRankedPlayEnabled = $isRankedPlayEnabled;
	}


	/**
	 * @return boolean
	 */
	public function getIsActive() {
		return $this->isActive;
	}

	/**
	 * @return boolean
	 */
	public function getIsBotEnabled() {
		return $this->isBotEnabled;
	}

	/**
	 * @return boolean
	 */
	public function getIsBotMmEnabled() {
		return $this->isBotMmEnabled;
	}

	/**
	 * @return boolean
	 */
	public function getIsFreeToPlay() {
		return $this->isFreeToPlay;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return boolean
	 */
	public function getIsRankedPlayEnabled() {
		return $this->isRankedPlayEnabled;
	}


}