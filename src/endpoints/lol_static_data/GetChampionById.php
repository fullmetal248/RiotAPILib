<?php
namespace RiotAPILib\endpoints\lol_static_data;

use RiotAPILib\endpoints\BaseEndPoint;
use RiotAPILib\EndPointsTable;

class GetChampionListById extends BaseEndPoint {
	/**
	 * GetChampion constructor.
	 * @param $apiKey
	 * @param $region
	 * @param $id
	 */
	//TODO add optional param
	public function __construct($apiKey, $region, $id) {
		parent::__construct($apiKey, $region);
		$endPoint = EndPointsTable::getInstance()->get(EndPointsTable::GlobalStatic);
		$hostUrl = $endPoint->getHostUrl();

		$this->targetUrl = "https://${hostUrl}/api/lol/static-data/jp/v1.2/champion/${id}?api_key=${apiKey}";
	}
}