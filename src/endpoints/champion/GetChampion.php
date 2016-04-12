<?php
namespace RiotAPILib\endpoints\champion;

use RiotAPILib\endpoints\BaseEndPoint;
use RiotAPILib\EndPointsTable;

class GetChampion extends BaseEndPoint {

	/**
	 * GetChampion constructor.
	 * @param $apiKey
	 * @param $region
	 */
	public function __construct($apiKey, $region) {
		parent::__construct($apiKey, $region);
		$endPoint = EndPointsTable::getInstance()->get($region);
		$hostUrl = $endPoint->getHostUrl();
		$regionStr = $endPoint->getRegionId();

		$this->targetUrl = "https://${hostUrl}/api/lol/${regionStr}/v1.2/champion?api_key=${apiKey}";
	}
}