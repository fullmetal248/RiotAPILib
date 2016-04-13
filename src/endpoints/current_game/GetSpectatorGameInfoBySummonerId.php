<?php
namespace RiotAPILib\endpoints\current_game;

use RiotAPILib\endpoints\BaseEndPoint;
use RiotAPILib\EndPointsTable;

class GetSpectatorGameInfoBySummonerId extends BaseEndPoint {
	/**
	 * GetChampion constructor.
	 * @param $apiKey
	 * @param $region
	 * @param $summonerId
	 */
	public function __construct($apiKey, $region, $summonerId) {
		parent::__construct($apiKey, $region);
		$endPoint = EndPointsTable::getInstance()->get($region);
		$hostUrl = $endPoint->getHostUrl();
		$platformId = $endPoint->getPlatformId();

		$this->targetUrl = "https://${hostUrl}/observer-mode/rest/consumer/getSpectatorGameInfo/${platformId}/${summonerId}/topchampions?api_key=${apiKey}";
	}
}