<?php
namespace RiotAPILib\endpoints\featured_games;

use RiotAPILib\endpoints\BaseEndPoint;
use RiotAPILib\EndPointsTable;

class GetFeaturedGames extends BaseEndPoint {
	/**
	 * GetChampion constructor.
	 * @param $apiKey
	 * @param $region
	 */
	public function __construct($apiKey, $region) {
		parent::__construct($apiKey, $region);
		$endPoint = EndPointsTable::getInstance()->get($region);
		$hostUrl = $endPoint->getHostUrl();

		$this->targetUrl = "https://${hostUrl}/observer-mode/rest/featured?api_key=${apiKey}";
	}
}