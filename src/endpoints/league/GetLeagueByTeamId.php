<?php
namespace RiotAPILib\endpoints\league;

use RiotAPILib\endpoints\BaseEndPoint;
use RiotAPILib\EndPointsTable;

class GetLeagueByTeamId extends BaseEndPoint {
	/**
	 * GetChampion constructor.
	 * @param $apiKey
	 * @param $region
	 * @param $teamId
	 */
	public function __construct($apiKey, $region, $teamId) {
		parent::__construct($apiKey, $region);
		$endPoint = EndPointsTable::getInstance()->get($region);
		$hostUrl = $endPoint->getHostUrl();
		$regionId = $endPoint->getRegionId();

		$this->targetUrl = "https://${hostUrl}/api/lol/${regionId}/v2.5/league/by-team/${teamId}?api_key=${apiKey}";
	}
}