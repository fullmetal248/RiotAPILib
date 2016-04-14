<?php
namespace RiotAPILib\endpoints\league;

use RiotAPILib\endpoints\BaseEndPoint;
use RiotAPILib\EndPointsTable;

class GetMasterLeague extends BaseEndPoint {
	/**
	 * GetChampion constructor.
	 * @param $apiKey
	 * @param $region
	 */
	public function __construct($apiKey, $region) {
		parent::__construct($apiKey, $region);
		$endPoint = EndPointsTable::getInstance()->get($region);
		$hostUrl = $endPoint->getHostUrl();
		$regionId = $endPoint->getRegionId();

		$this->targetUrl = "https://${hostUrl}/api/lol/{$regionId}/v2.5/league/master?api_key=${apiKey}";
	}
}