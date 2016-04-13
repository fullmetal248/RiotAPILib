<?php
namespace RiotAPILib\endpoints\champion;

use RiotAPILib\endpoints\BaseEndPoint;
use RiotAPILib\EndPointsTable;

class GetChampion extends BaseEndPoint {

	/**
	 * GetChampion constructor.
	 * @param $apiKey
	 * @param $region
	 * @param $isOnlyFreeToPlay
	 */
	public function __construct($apiKey, $region, $isOnlyFreeToPlay) {
		parent::__construct($apiKey, $region);
		$endPoint = EndPointsTable::getInstance()->get($region);
		$hostUrl = $endPoint->getHostUrl();
		$regionStr = $endPoint->getRegionId();

		$this->targetUrl = "https://${hostUrl}/api/lol/${regionStr}/v1.2/champion?freeToPlay=${isOnlyFreeToPlay}&&api_key=${apiKey}";
	}
}