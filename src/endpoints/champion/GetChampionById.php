<?php
namespace RiotAPILib\endpoints\champion;

use RiotAPILib\endpoints\BaseEndPoint;
use RiotAPILib\EndPointsTable;

class GetChampionById extends BaseEndPoint {

	/**
	 * GetChampion constructor.
	 * @param $apiKey
	 * @param $region
	 * @param $id
	 */
	public function __construct($apiKey, $region, $id) {
		parent::__construct($apiKey, $region);
		$endPoint = EndPointsTable::getInstance()->get($region);
		$hostUrl = $endPoint->getHostUrl();
		$regionStr = $endPoint->getRegionId();

		$this->targetUrl = "https://${hostUrl}/api/lol/${regionStr}/v1.2/champion/${id}?api_key=${apiKey}";
	}
}