<?php
namespace RiotAPILib;

interface RiotAPI {
	// TODO 関数名がすっごい気持ち悪いよ！
	// champion-v1.2
	public function getChampion();
	public function getChampionById($id);

	// TODO ここの関数名が統一感無くて気持ち悪い
	// championmastery
	public function getChampionMasteries($playerId);
	public function getChampionMasteryByChampionId($playerId, $championId);
	public function getChampionMasteryScore($playerId);
	public function getChampionMasteryTopChampions($playerId);

	// current-game-v1.0
	public function getSpectatorGameInfoBySummonerId($summonerId);

	// featured-games-v1.0
	public function getFeaturedGames();

	// game-v1.3
	public function getRecentGamesBySummonerId($summonerId);

	// league-v2.5
	public function getLeaguesBySummonerId($summonerId);
	// TODO API的にはSummonerIDを複数受け付けるのでList構造とか何かのものも受けられるようにしておく
	public function getLeagueEntriesBySummonerId($summonerId);
	public function getLeaguesByTeamId($teamId);
	public function getLeagueEntriesByTeamId($teamId);
	public function getChallengerLeague();
	public function getMasterLeague();

	//TODO EndPointごとにクラスとかわけないと辛いかも？
	// lol-static-data-v1.2
	public function getChampionList();
	public function getChampionListById($id);
	public function getItemList();
	public function getItemListById($id);
	public function getLanguageStrings();
	public function getLanguages();
	public function getMapData();
	public function getMasteryList();
	public function getMasteryById($id);
	public function getRealm();
	public function getRuneList();
	public function getRuneById($id);
	public function getSummonerSpellList();
	public function getSummonerSpellListById($id);
	public function getVersions();

	// lol-status-v1.0
	public function getShards();
	public function getShardsByRegion($region);

	// match-v2.2
	public function getMatchDetailByMatchId($matchId);

	// matchlist-v2.2
	public function getMatchListBySummonerId($summonerId);

	// stats-v1.3
	public function getRankedStatsBySummonerId($summonerId);
	public function getPlayerStatsSummaryListBySummonerId($summonerId);

	// summoner-v1.4
	public function getSummonerBySummonerName($summonerName);
	public function getSummonerBySummonerId($summonerId);
	public function getSummonerMasteriesBySummonerId($summonerId);
	public function getSummonerNameBySummonerId($summonerId);
	public function getSummonerRunesBySummonerId($summonerId);

	// team-v2.4
	public function getTeamBySummonerId($summonerId);
	public function getTeamByTeamId($teamId);
}