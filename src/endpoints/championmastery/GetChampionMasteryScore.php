<?php
namespace RiotAPILib\endpoints\championmastery;

use RiotAPILib\endpoints\BaseEndPoint;
use RiotAPILib\EndPointsTable;

class GetChampionMasteryScore extends BaseEndPoint {
	/**
	 * GetChampion constructor.
	 * @param $apiKey
	 * @param $region
	 * @param $playerId
	 */
	public function __construct($apiKey, $region, $playerId) {
		parent::__construct($apiKey, $region);
		$endPoint = EndPointsTable::getInstance()->get($region);
		$hostUrl = $endPoint->getHostUrl();
		$platformId = $endPoint->getPlatformId();

		$this->targetUrl = "https://${hostUrl}/championmastery/location/${platformId}/player/${playerId}/score?api_key=${apiKey}";
	}
}