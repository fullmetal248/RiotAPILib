<?php
namespace RiotAPILib\endpoints\game;

use RiotAPILib\endpoints\BaseEndPoint;
use RiotAPILib\EndPointsTable;

class GetRecentGame extends BaseEndPoint {
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
		$regionId = $endPoint->getRegionId();

		$this->targetUrl = "https://${hostUrl}/api/lol/${regionId}/v1.3/game/by-summoner/${summonerId}/recent?api_key=${apiKey}";
	}
}