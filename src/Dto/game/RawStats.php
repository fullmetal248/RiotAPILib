<?php
namespace RiotAPILib\Dto\game;

class RawStats {
	private $assists, $barracksKilled, $bountyLevel, $championsKilled, $combatPlayerScore, $consumablesPurchased,
		$damageDealtPlayer, $doubleKills, $firstBlood, $gold, $goldEarned, $goldSpent, $item0, $item1, $item2,
		$item3, $item4, $item5, $item6, $itemsPurchased, $killingSprees, $largestCriticalStrike, $largestKillingSpree,
		$largestMultiKill, $legendaryItemsCreated, $level, $magicDamageDealtPlayer, $magicDamageDealtToChampions,
		$magicDamageTaken, $minionsDenied, $minionsKilled, $neuturalMinionsKilled, $neutralMinionsKilledEnemyJungle,
		$neutralMinionsKilledYourJungle;
	private $isNexusKilled;
	private $nodeCapture, $nodeCaptureAssist, $nodeNeutralize, $nodeNeutralizeAssist, $numDeaths, $numItemsBought,
		$objectivePlayerScore, $pentaKills, $physicalDamageDealtPlayer, $physicalDamageDealtToChampions,
		$physicalDamageTaken, $playerPosition, $playerRole, $quadraKills, $sightWardsBought,
		$spell1Cast, $spell2Cast, $spell3Cast, $spell4Cast, $summonSpell1Cast, $summonSpell2Cast, $superMonsterKilled,
		$team, $teamObjective, $timePlayed, $totalDamageDealt, $totalDamageDealtToChampions, $totalDamageTaken,
		$totalHeal, $totalPlayerScore, $totalScoreRank, $totalTimeCrowdControlDealt, $totalUnitsHealed, $tripleKills,
		$trueDamageDealtPlayer, $trueDamageDealtToChampions, $trueDamageTaken, $turretsKilled, $unrealKills,
		$victoryPointTotal, $visionWardsBought, $wardKilled, $wardPlaced;
	private $isWin;

	/**
	 * RawStats constructor.
	 * @param $assists
	 * @param $barracksKilled
	 * @param $bountyLevel
	 * @param $championsKilled
	 * @param $combatPlayerScore
	 * @param $consumablesPurchased
	 * @param $damageDealtPlayer
	 * @param $doubleKills
	 * @param $firstBlood
	 * @param $gold
	 * @param $goldEarned
	 * @param $goldSpent
	 * @param $item0
	 * @param $item1
	 * @param $item2
	 * @param $item3
	 * @param $item4
	 * @param $item5
	 * @param $item6
	 * @param $itemsPurchased
	 * @param $killingSprees
	 * @param $largestCriticalStrike
	 * @param $largestKillingSpree
	 * @param $largestMultiKill
	 * @param $legendaryItemsCreated
	 * @param $level
	 * @param $magicDamageDealtPlayer
	 * @param $magicDamageDealtToChampions
	 * @param $magicDamageTaken
	 * @param $minionsDenied
	 * @param $minionsKilled
	 * @param $neutralMinionsKilled
	 * @param $neutralMinionsKilledEnemyJungle
	 * @param $neutralMinionsKilledYourJungle
	 * @param $isNexusKilled
	 * @param $nodeCapture
	 * @param $nodeCaptureAssist
	 * @param $nodeNeutralize
	 * @param $nodeNeutralizeAssist
	 * @param $numDeaths
	 * @param $numItemsBought
	 * @param $objectivePlayerScore
	 * @param $pentaKills
	 * @param $physicalDamageDealtPlayer
	 * @param $physicalDamageDealtToChampions
	 * @param $physicalDamageTaken
	 * @param $playerPosition
	 * @param $playerRole
	 * @param $quadraKills
	 * @param $sightWardsBought
	 * @param $spell1Cast
	 * @param $spell2Cast
	 * @param $spell3Cast
	 * @param $spell4Cast
	 * @param $summonSpell1Cast
	 * @param $summonSpell2Cast
	 * @param $superMonsterKilled
	 * @param $team
	 * @param $teamObjective
	 * @param $timePlayed
	 * @param $totalDamageDealt
	 * @param $totalDamageDealtToChampions
	 * @param $totalDamageTaken
	 * @param $totalHeal
	 * @param $totalPlayerScore
	 * @param $totalScoreRank
	 * @param $totalTimeCrowdControlDealt
	 * @param $totalUnitsHealed
	 * @param $tripleKills
	 * @param $trueDamageDealtPlayer
	 * @param $trueDamageDealtToChampions
	 * @param $trueDamageTaken
	 * @param $turretsKilled
	 * @param $unrealKills
	 * @param $victoryPointTotal
	 * @param $visionWardsBought
	 * @param $wardKilled
	 * @param $wardPlaced
	 * @param $isWin
	 */
	public function __construct($assists, $barracksKilled, $bountyLevel, $championsKilled, $combatPlayerScore,
								$consumablesPurchased, $damageDealtPlayer, $doubleKills, $firstBlood, $gold,
								$goldEarned, $goldSpent, $item0, $item1, $item2, $item3, $item4, $item5, $item6,
								$itemsPurchased, $killingSprees, $largestCriticalStrike, $largestKillingSpree,
								$largestMultiKill, $legendaryItemsCreated, $level, $magicDamageDealtPlayer,
								$magicDamageDealtToChampions, $magicDamageTaken, $minionsDenied, $minionsKilled,
								$neutralMinionsKilled, $neutralMinionsKilledEnemyJungle,
								$neutralMinionsKilledYourJungle, $isNexusKilled, $nodeCapture, $nodeCaptureAssist,
								$nodeNeutralize, $nodeNeutralizeAssist, $numDeaths, $numItemsBought,
								$objectivePlayerScore, $pentaKills, $physicalDamageDealtPlayer,
								$physicalDamageDealtToChampions, $physicalDamageTaken, $playerPosition, $playerRole,
								$quadraKills, $sightWardsBought, $spell1Cast, $spell2Cast, $spell3Cast, $spell4Cast,
								$summonSpell1Cast, $summonSpell2Cast, $superMonsterKilled, $team, $teamObjective,
								$timePlayed, $totalDamageDealt, $totalDamageDealtToChampions, $totalDamageTaken,
								$totalHeal, $totalPlayerScore, $totalScoreRank, $totalTimeCrowdControlDealt,
								$totalUnitsHealed, $tripleKills, $trueDamageDealtPlayer, $trueDamageDealtToChampions,
								$trueDamageTaken, $turretsKilled, $unrealKills, $victoryPointTotal, $visionWardsBought,
								$wardKilled, $wardPlaced, $isWin) {
		// TODO リファクタリング
		$this->assists = $assists;
		$this->barracksKilled = $barracksKilled;
		$this->bountyLevel = $bountyLevel;
		$this->championsKilled = $championsKilled;
		$this->combatPlayerScore = $combatPlayerScore;
		$this->consumablesPurchased = $consumablesPurchased;
		$this->damageDealtPlayer = $damageDealtPlayer;
		$this->doubleKills = $doubleKills;
		$this->firstBlood = $firstBlood;
		$this->gold = $gold;
		$this->goldEarned = $goldEarned;
		$this->goldSpent = $goldSpent;
		$this->item0 = $item0;
		$this->item1 = $item1;
		$this->item2 = $item2;
		$this->item3 = $item3;
		$this->item4 = $item4;
		$this->item5 = $item5;
		$this->item6 = $item6;
		$this->itemsPurchased = $itemsPurchased;
		$this->killingSprees = $killingSprees;
		$this->largestCriticalStrike = $largestCriticalStrike;
		$this->largestKillingSpree = $largestKillingSpree;
		$this->largestMultiKill = $largestMultiKill;
		$this->legendaryItemsCreated = $legendaryItemsCreated;
		$this->level = $level;
		$this->magicDamageDealtPlayer = $magicDamageDealtPlayer;
		$this->magicDamageDealtToChampions = $magicDamageDealtToChampions;
		$this->magicDamageTaken = $magicDamageTaken;
		$this->minionsDenied = $minionsDenied;
		$this->minionsKilled = $minionsKilled;
		$this->neuturalMinionsKilled = $neutralMinionsKilled;
		$this->neutralMinionsKilledEnemyJungle = $neutralMinionsKilledEnemyJungle;
		$this->neutralMinionsKilledYourJungle = $neutralMinionsKilledYourJungle;
		$this->isNexusKilled = $isNexusKilled;
		$this->nodeCapture = $nodeCapture;
		$this->nodeCaptureAssist = $nodeCaptureAssist;
		$this->nodeNeutralize = $nodeNeutralize;
		$this->nodeNeutralizeAssist = $nodeNeutralizeAssist;
		$this->numDeaths = $numDeaths;
		$this->numItemsBought = $numItemsBought;
		$this->objectivePlayerScore = $objectivePlayerScore;
		$this->pentaKills = $pentaKills;
		$this->physicalDamageDealtPlayer = $physicalDamageDealtPlayer;
		$this->physicalDamageDealtToChampions = $physicalDamageDealtToChampions;
		$this->physicalDamageTaken = $physicalDamageTaken;
		$this->playerPosition = $playerPosition;
		$this->playerRole = $playerRole;
		$this->quadraKills = $quadraKills;
		$this->sightWardsBought = $sightWardsBought;
		$this->spell1Cast = $spell1Cast;
		$this->spell2Cast = $spell2Cast;
		$this->spell3Cast = $spell3Cast;
		$this->spell4Cast = $spell4Cast;
		$this->summonSpell1Cast = $summonSpell1Cast;
		$this->summonSpell2Cast = $summonSpell2Cast;
		$this->superMonsterKilled = $superMonsterKilled;
		$this->team = $team;
		$this->teamObjective = $teamObjective;
		$this->timePlayed = $timePlayed;
		$this->totalDamageDealt = $totalDamageDealt;
		$this->totalDamageDealtToChampions = $totalDamageDealtToChampions;
		$this->totalDamageTaken = $totalDamageTaken;
		$this->totalHeal = $totalHeal;
		$this->totalPlayerScore = $totalPlayerScore;
		$this->totalScoreRank = $totalScoreRank;
		$this->totalTimeCrowdControlDealt = $totalTimeCrowdControlDealt;
		$this->totalUnitsHealed = $totalUnitsHealed;
		$this->tripleKills = $tripleKills;
		$this->trueDamageDealtPlayer = $trueDamageDealtPlayer;
		$this->trueDamageDealtToChampions = $trueDamageDealtToChampions;
		$this->trueDamageTaken = $trueDamageTaken;
		$this->turretsKilled = $turretsKilled;
		$this->unrealKills = $unrealKills;
		$this->victoryPointTotal = $victoryPointTotal;
		$this->visionWardsBought = $visionWardsBought;
		$this->wardKilled = $wardKilled;
		$this->wardPlaced = $wardPlaced;
		$this->isWin = $isWin;
	}

	/**
	 * @return int
	 */
	public function getAssists() {
		return $this->assists;
	}

	/**
	 * @return int
	 */
	public function getBarracksKilled() {
		return $this->barracksKilled;
	}

	/**
	 * @return int
	 */
	public function getBountyLevel() {
		return $this->bountyLevel;
	}

	/**
	 * @return int
	 */
	public function getChampionsKilled() {
		return $this->championsKilled;
	}

	/**
	 * @return int
	 */
	public function getCombatPlayerScore() {
		return $this->combatPlayerScore;
	}

	/**
	 * @return int
	 */
	public function getConsumablesPurchased() {
		return $this->consumablesPurchased;
	}

	/**
	 * @return int
	 */
	public function getDamageDealtPlayer() {
		return $this->damageDealtPlayer;
	}

	/**
	 * @return int
	 */
	public function getDoubleKills() {
		return $this->doubleKills;
	}

	/**
	 * @return int
	 */
	public function getFirstBlood() {
		return $this->firstBlood;
	}

	/**
	 * @return int
	 */
	public function getGold() {
		return $this->gold;
	}

	/**
	 * @return int
	 */
	public function getGoldEarned() {
		return $this->goldEarned;
	}

	/**
	 * @return int
	 */
	public function getGoldSpent() {
		return $this->goldSpent;
	}

	/**
	 * @return int
	 */
	public function getItem0() {
		return $this->item0;
	}

	/**
	 * @return int
	 */
	public function getItem1() {
		return $this->item1;
	}

	/**
	 * @return int
	 */
	public function getItem2() {
		return $this->item2;
	}

	/**
	 * @return int
	 */
	public function getItem3() {
		return $this->item3;
	}

	/**
	 * @return int
	 */
	public function getItem4() {
		return $this->item4;
	}

	/**
	 * @return int
	 */
	public function getItem5() {
		return $this->item5;
	}

	/**
	 * @return int
	 */
	public function getItem6() {
		return $this->item6;
	}

	/**
	 * @return int
	 */
	public function getItemsPurchased() {
		return $this->itemsPurchased;
	}

	/**
	 * @return int
	 */
	public function getKillingSprees() {
		return $this->killingSprees;
	}

	/**
	 * @return int
	 */
	public function getLargestCriticalStrike() {
		return $this->largestCriticalStrike;
	}

	/**
	 * @return int
	 */
	public function getLargestKillingSpree() {
		return $this->largestKillingSpree;
	}

	/**
	 * @return int
	 */
	public function getLargestMultiKill() {
		return $this->largestMultiKill;
	}

	/**
	 * @return int
	 */
	public function getLegendaryItemsCreated() {
		return $this->legendaryItemsCreated;
	}

	/**
	 * @return int
	 */
	public function getLevel() {
		return $this->level;
	}

	/**
	 * @return int
	 */
	public function getMagicDamageDealtPlayer() {
		return $this->magicDamageDealtPlayer;
	}

	/**
	 * @return int
	 */
	public function getMagicDamageDealtToChampions() {
		return $this->magicDamageDealtToChampions;
	}

	/**
	 * @return int
	 */
	public function getMagicDamageTaken() {
		return $this->magicDamageTaken;
	}

	/**
	 * @return int
	 */
	public function getMinionsDenied() {
		return $this->minionsDenied;
	}

	/**
	 * @return int
	 */
	public function getMinionsKilled() {
		return $this->minionsKilled;
	}

	/**
	 * @return int
	 */
	public function getNeuturalMinionsKilled() {
		return $this->neuturalMinionsKilled;
	}

	/**
	 * @return int
	 */
	public function getNeutralMinionsKilledEnemyJungle() {
		return $this->neutralMinionsKilledEnemyJungle;
	}

	/**
	 * @return int
	 */
	public function getNeutralMinionsKilledYourJungle() {
		return $this->neutralMinionsKilledYourJungle;
	}

	/**
	 * @return boolean
	 */
	public function getIsNexusKilled() {
		return $this->isNexusKilled;
	}

	/**
	 * @return int
	 */
	public function getNodeCapture() {
		return $this->nodeCapture;
	}

	/**
	 * @return int
	 */
	public function getNodeCaptureAssist() {
		return $this->nodeCaptureAssist;
	}

	/**
	 * @return int
	 */
	public function getNodeNeutralize() {
		return $this->nodeNeutralize;
	}

	/**
	 * @return int
	 */
	public function getNodeNeutralizeAssist() {
		return $this->nodeNeutralizeAssist;
	}

	/**
	 * @return int
	 */
	public function getNumDeaths() {
		return $this->numDeaths;
	}

	/**
	 * @return int
	 */
	public function getNumItemsBought() {
		return $this->numItemsBought;
	}

	/**
	 * @return int
	 */
	public function getObjectivePlayerScore() {
		return $this->objectivePlayerScore;
	}

	/**
	 * @return int
	 */
	public function getPentaKills() {
		return $this->pentaKills;
	}

	/**
	 * @return int
	 */
	public function getPhysicalDamageDealtPlayer() {
		return $this->physicalDamageDealtPlayer;
	}

	/**
	 * @return int
	 */
	public function getPhysicalDamageDealtToChampions() {
		return $this->physicalDamageDealtToChampions;
	}

	/**
	 * @return int
	 */
	public function getPhysicalDamageTaken() {
		return $this->physicalDamageTaken;
	}

	/**
	 * @return int
	 */
	public function getPlayerPosition() {
		return $this->playerPosition;
	}

	/**
	 * @return int
	 */
	public function getPlayerRole() {
		return $this->playerRole;
	}

	/**
	 * @return int
	 */
	public function getQuadraKills() {
		return $this->quadraKills;
	}

	/**
	 * @return int
	 */
	public function getSightWardsBought() {
		return $this->sightWardsBought;
	}

	/**
	 * @return int
	 */
	public function getSpell1Cast() {
		return $this->spell1Cast;
	}

	/**
	 * @return int
	 */
	public function getSpell2Cast() {
		return $this->spell2Cast;
	}

	/**
	 * @return int
	 */
	public function getSpell3Cast() {
		return $this->spell3Cast;
	}

	/**
	 * @return int
	 */
	public function getSpell4Cast() {
		return $this->spell4Cast;
	}

	/**
	 * @return int
	 */
	public function getSummonSpell1Cast() {
		return $this->summonSpell1Cast;
	}

	/**
	 * @return int
	 */
	public function getSummonSpell2Cast() {
		return $this->summonSpell2Cast;
	}

	/**
	 * @return int
	 */
	public function getSuperMonsterKilled() {
		return $this->superMonsterKilled;
	}

	/**
	 * @return int
	 */
	public function getTeam() {
		return $this->team;
	}

	/**
	 * @return int
	 */
	public function getTeamObjective() {
		return $this->teamObjective;
	}

	/**
	 * @return int
	 */
	public function getTimePlayed() {
		return $this->timePlayed;
	}

	/**
	 * @return int
	 */
	public function getTotalDamageDealt() {
		return $this->totalDamageDealt;
	}

	/**
	 * @return int
	 */
	public function getTotalDamageDealtToChampions() {
		return $this->totalDamageDealtToChampions;
	}

	/**
	 * @return int
	 */
	public function getTotalDamageTaken() {
		return $this->totalDamageTaken;
	}

	/**
	 * @return int
	 */
	public function getTotalHeal() {
		return $this->totalHeal;
	}

	/**
	 * @return int
	 */
	public function getTotalPlayerScore() {
		return $this->totalPlayerScore;
	}

	/**
	 * @return int
	 */
	public function getTotalScoreRank() {
		return $this->totalScoreRank;
	}

	/**
	 * @return int
	 */
	public function getTotalTimeCrowdControlDealt() {
		return $this->totalTimeCrowdControlDealt;
	}

	/**
	 * @return int
	 */
	public function getTotalUnitsHealed() {
		return $this->totalUnitsHealed;
	}

	/**
	 * @return int
	 */
	public function getTripleKills() {
		return $this->tripleKills;
	}

	/**
	 * @return int
	 */
	public function getTrueDamageDealtPlayer() {
		return $this->trueDamageDealtPlayer;
	}

	/**
	 * @return int
	 */
	public function getTrueDamageDealtToChampions() {
		return $this->trueDamageDealtToChampions;
	}

	/**
	 * @return int
	 */
	public function getTrueDamageTaken() {
		return $this->trueDamageTaken;
	}

	/**
	 * @return int
	 */
	public function getTurretsKilled() {
		return $this->turretsKilled;
	}

	/**
	 * @return int
	 */
	public function getUnrealKills() {
		return $this->unrealKills;
	}

	/**
	 * @return int
	 */
	public function getVictoryPointTotal() {
		return $this->victoryPointTotal;
	}

	/**
	 * @return int
	 */
	public function getVisionWardsBought() {
		return $this->visionWardsBought;
	}

	/**
	 * @return int
	 */
	public function getWardKilled() {
		return $this->wardKilled;
	}

	/**
	 * @return int
	 */
	public function getWardPlaced() {
		return $this->wardPlaced;
	}

	/**
	 * @return boolean
	 */
	public function getIsWin() {
		return $this->isWin;
	}

}