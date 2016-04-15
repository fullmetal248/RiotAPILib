<?php
namespace RiotAPILib\endpoints\lol_static_data;

use RiotAPILib\endpoints\BaseEndPoint;
use RiotAPILib\EndPointsTable;

class GetLanguages extends BaseEndPoint {
	/**
	 * GetChampion constructor.
	 * @param $apiKey
	 * @param $region
	 */
	//TODO add optional param
	public function __construct($apiKey, $region) {
		parent::__construct($apiKey, $region);
		$endPoint = EndPointsTable::getInstance()->get(EndPointsTable::GlobalStatic);
		$hostUrl = $endPoint->getHostUrl();

		$this->targetUrl = "https://${hostUrl}/api/lol/static-data/jp/v1.2/languages?api_key=${apiKey}";
	}
}