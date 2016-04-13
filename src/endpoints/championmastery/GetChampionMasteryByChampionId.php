<?php
namespace RiotAPILib\endpoints\championmastery;

use RiotAPILib\endpoints\BaseEndPoint;
use RiotAPILib\EndPointsTable;

class GetChampionMasteryByChampionId extends BaseEndPoint {
	/**
	 * GetChampion constructor.
	 * @param $apiKey
	 * @param $region
	 * @param $playerId
	 * @param $championId
	 */
	public function __construct($apiKey, $region, $playerId, $championId) {
		parent::__construct($apiKey, $region);
		$endPoint = EndPointsTable::getInstance()->get($region);
		$hostUrl = $endPoint->getHostUrl();
		$platformId = $endPoint->getPlatformId();

		$this->targetUrl = "https://${hostUrl}/championmastery/location/${platformId}/player/${playerId}/champion/${championId}?api_key=${apiKey}";
	}
}