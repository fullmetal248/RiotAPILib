<?php
namespace RiotAPILib\Dto\match;

class Player {
	private $matchHistoryUri;
	private $profileIcon;
	private $summonerId;
	private $summonerName;

	/**
	 * Player constructor.
	 * @param $matchHistoryUri
	 * @param $profileIcon
	 * @param $summonerId
	 * @param $summonerName
	 */
	public function __construct($matchHistoryUri, $profileIcon, $summonerId, $summonerName) {
		$this->matchHistoryUri = $matchHistoryUri;
		$this->profileIcon = $profileIcon;
		$this->summonerId = $summonerId;
		$this->summonerName = $summonerName;
	}

	/**
	 * @return string
	 */
	public function getMatchHistoryUri() {
		return $this->matchHistoryUri;
	}

	/**
	 * @return int
	 */
	public function getProfileIcon() {
		return $this->profileIcon;
	}

	/**
	 * @return int
	 */
	public function getSummonerId() {
		return $this->summonerId;
	}

	/**
	 * @return string
	 */
	public function getSummonerName() {
		return $this->summonerName;
	}

}