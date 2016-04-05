<?php
namespace RiotAPILib\Dto\match;

class ParticipantStats {
	private $assists, $champLevel, $combatPlayerScore, $deaths, $doubleKills;
	private $isFirstBloodAssist, $isFirstBloodKill, $isFirstInhibitorAssist, $isFirstInhibitorKill,
		$isFirstTowerAssist, $isFirstTowerKill;
	private $goldEarned, $goldSpent, $inhibitorKills,
		$item0, $item1, $item2, $item3, $item4, $item5, $item6, $killingSprees, $kills, $largestCriticalStrike,
		$largestKillingSpree, $largestMultiKill, $magicDamageDealt, $magicDamageDealtToChampions, $magicDamageTaken,
		$minionsKilled, $neutralMinionsKilled, $neutralMinionsKilledEnemyJungle, $neutralMinionsKilledTeamJungle,
		$nodeCapture, $nodeCaptureAssist, $nodeNeutralize, $nodeNeutralizeAssist, $objectivePlayerScore, $pentaKills,
		$physicalDamageDealt, $physicalDamageDealtToChampions, $physicalDamageTaken, $quadraKills,
		$sightWardsBoughtInGame, $teamObjective, $totalDamageDealt, $totalDamageDealtToChampions, $totalDamageTaken,
		$totalHeal, $totalPlayerScore, $totalScoreRank, $totalTimeCrowdControlDealt, $totalUnitsHealed, $towerKills,
		$tripleKills, $trueDamageDealt, $trueDamageDealtToChampions, $trueDamageTaken, $unrealKills,
		$visionWardsBoughtInGame, $wardsKilled, $wardsPlaced;
	private $isWinner;

	/**
	 * ParticipantStats constructor.
	 * @param $assists
	 * @param $champLevel
	 * @param $combatPlayerScore
	 * @param $deaths
	 * @param $doubleKills
	 * @param $isFirstBloodAssist
	 * @param $isFirstBloodKill
	 * @param $isFirstInhibitorAssist
	 * @param $isFirstInhibitorKill
	 * @param $isFirstTowerAssist
	 * @param $isFirstTowerKill
	 * @param $goldEarned
	 * @param $goldSpent
	 * @param $inhibitorKills
	 * @param $item0
	 * @param $item1
	 * @param $item2
	 * @param $item3
	 * @param $item4
	 * @param $item5
	 * @param $item6
	 * @param $killingSprees
	 * @param $kills
	 * @param $largestCriticalStrike
	 * @param $largestKillingSpree
	 * @param $largestMultiKill
	 * @param $magicDamageDealt
	 * @param $magicDamageDealtToChampions
	 * @param $magicDamageTaken
	 * @param $minionsKilled
	 * @param $neutralMinionsKilled
	 * @param $neutralMinionsKilledEnemyJungle
	 * @param $neutralMinionsKilledTeamJungle
	 * @param $nodeCapture
	 * @param $nodeCaptureAssist
	 * @param $nodeNeutralize
	 * @param $nodeNeutralizeAssist
	 * @param $objectivePlayerScore
	 * @param $pentaKills
	 * @param $physicalDamageDealt
	 * @param $physicalDamageDealtToChampions
	 * @param $physicalDamageTaken
	 * @param $quadraKills
	 * @param $sightWardsBoughtInGame
	 * @param $teamObjective
	 * @param $totalDamageDealt
	 * @param $totalDamageDealtToChampions
	 * @param $totalDamageTaken
	 * @param $totalHeal
	 * @param $totalPlayerScore
	 * @param $totalScoreRank
	 * @param $totalTimeCrowdControlDealt
	 * @param $totalUnitsHealed
	 * @param $towerKills
	 * @param $tripleKills
	 * @param $trueDamageDealt
	 * @param $trueDamageDealtToChampions
	 * @param $trueDamageTaken
	 * @param $unrealKills
	 * @param $visionWardsBoughtInGame
	 * @param $wardsKilled
	 * @param $wardsPlaced
	 * @param $isWinner
	 */
	public function __construct($assists, $champLevel, $combatPlayerScore, $deaths, $doubleKills, $isFirstBloodAssist,
								$isFirstBloodKill, $isFirstInhibitorAssist, $isFirstInhibitorKill, $isFirstTowerAssist,
								$isFirstTowerKill, $goldEarned, $goldSpent, $inhibitorKills, $item0, $item1, $item2,
								$item3, $item4, $item5, $item6, $killingSprees, $kills, $largestCriticalStrike,
								$largestKillingSpree, $largestMultiKill, $magicDamageDealt,
								$magicDamageDealtToChampions, $magicDamageTaken, $minionsKilled, $neutralMinionsKilled,
								$neutralMinionsKilledEnemyJungle, $neutralMinionsKilledTeamJungle, $nodeCapture,
								$nodeCaptureAssist, $nodeNeutralize, $nodeNeutralizeAssist, $objectivePlayerScore,
								$pentaKills, $physicalDamageDealt, $physicalDamageDealtToChampions,
								$physicalDamageTaken, $quadraKills, $sightWardsBoughtInGame, $teamObjective,
								$totalDamageDealt, $totalDamageDealtToChampions, $totalDamageTaken, $totalHeal,
								$totalPlayerScore, $totalScoreRank, $totalTimeCrowdControlDealt, $totalUnitsHealed,
								$towerKills, $tripleKills, $trueDamageDealt, $trueDamageDealtToChampions,
								$trueDamageTaken, $unrealKills, $visionWardsBoughtInGame, $wardsKilled, $wardsPlaced,
								$isWinner) {
		$this->assists = $assists;
		$this->champLevel = $champLevel;
		$this->combatPlayerScore = $combatPlayerScore;
		$this->deaths = $deaths;
		$this->doubleKills = $doubleKills;
		$this->isFirstBloodAssist = $isFirstBloodAssist;
		$this->isFirstBloodKill = $isFirstBloodKill;
		$this->isFirstInhibitorAssist = $isFirstInhibitorAssist;
		$this->isFirstInhibitorKill = $isFirstInhibitorKill;
		$this->isFirstTowerAssist = $isFirstTowerAssist;
		$this->isFirstTowerKill = $isFirstTowerKill;
		$this->goldEarned = $goldEarned;
		$this->goldSpent = $goldSpent;
		$this->inhibitorKills = $inhibitorKills;
		$this->item0 = $item0;
		$this->item1 = $item1;
		$this->item2 = $item2;
		$this->item3 = $item3;
		$this->item4 = $item4;
		$this->item5 = $item5;
		$this->item6 = $item6;
		$this->killingSprees = $killingSprees;
		$this->kills = $kills;
		$this->largestCriticalStrike = $largestCriticalStrike;
		$this->largestKillingSpree = $largestKillingSpree;
		$this->largestMultiKill = $largestMultiKill;
		$this->magicDamageDealt = $magicDamageDealt;
		$this->magicDamageDealtToChampions = $magicDamageDealtToChampions;
		$this->magicDamageTaken = $magicDamageTaken;
		$this->minionsKilled = $minionsKilled;
		$this->neutralMinionsKilled = $neutralMinionsKilled;
		$this->neutralMinionsKilledEnemyJungle = $neutralMinionsKilledEnemyJungle;
		$this->neutralMinionsKilledTeamJungle = $neutralMinionsKilledTeamJungle;
		$this->nodeCapture = $nodeCapture;
		$this->nodeCaptureAssist = $nodeCaptureAssist;
		$this->nodeNeutralize = $nodeNeutralize;
		$this->nodeNeutralizeAssist = $nodeNeutralizeAssist;
		$this->objectivePlayerScore = $objectivePlayerScore;
		$this->pentaKills = $pentaKills;
		$this->physicalDamageDealt = $physicalDamageDealt;
		$this->physicalDamageDealtToChampions = $physicalDamageDealtToChampions;
		$this->physicalDamageTaken = $physicalDamageTaken;
		$this->quadraKills = $quadraKills;
		$this->sightWardsBoughtInGame = $sightWardsBoughtInGame;
		$this->teamObjective = $teamObjective;
		$this->totalDamageDealt = $totalDamageDealt;
		$this->totalDamageDealtToChampions = $totalDamageDealtToChampions;
		$this->totalDamageTaken = $totalDamageTaken;
		$this->totalHeal = $totalHeal;
		$this->totalPlayerScore = $totalPlayerScore;
		$this->totalScoreRank = $totalScoreRank;
		$this->totalTimeCrowdControlDealt = $totalTimeCrowdControlDealt;
		$this->totalUnitsHealed = $totalUnitsHealed;
		$this->towerKills = $towerKills;
		$this->tripleKills = $tripleKills;
		$this->trueDamageDealt = $trueDamageDealt;
		$this->trueDamageDealtToChampions = $trueDamageDealtToChampions;
		$this->trueDamageTaken = $trueDamageTaken;
		$this->unrealKills = $unrealKills;
		$this->visionWardsBoughtInGame = $visionWardsBoughtInGame;
		$this->wardsKilled = $wardsKilled;
		$this->wardsPlaced = $wardsPlaced;
		$this->isWinner = $isWinner;
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
	public function getChampLevel() {
		return $this->champLevel;
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
	public function getDeaths() {
		return $this->deaths;
	}

	/**
	 * @return int
	 */
	public function getDoubleKills() {
		return $this->doubleKills;
	}

	/**
	 * @return boolean
	 */
	public function getIsFirstBloodAssist() {
		return $this->isFirstBloodAssist;
	}

	/**
	 * @return boolean
	 */
	public function getIsFirstBloodKill() {
		return $this->isFirstBloodKill;
	}

	/**
	 * @return boolean
	 */
	public function getIsFirstInhibitorAssist() {
		return $this->isFirstInhibitorAssist;
	}

	/**
	 * @return boolean
	 */
	public function getIsFirstInhibitorKill() {
		return $this->isFirstInhibitorKill;
	}

	/**
	 * @return boolean
	 */
	public function getIsFirstTowerAssist() {
		return $this->isFirstTowerAssist;
	}

	/**
	 * @return boolean
	 */
	public function getIsFirstTowerKill() {
		return $this->isFirstTowerKill;
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
	public function getInhibitorKills() {
		return $this->inhibitorKills;
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
	public function getKillingSprees() {
		return $this->killingSprees;
	}

	/**
	 * @return int
	 */
	public function getKills() {
		return $this->kills;
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
	public function getMagicDamageDealt() {
		return $this->magicDamageDealt;
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
	public function getMinionsKilled() {
		return $this->minionsKilled;
	}

	/**
	 * @return int
	 */
	public function getNeutralMinionsKilled() {
		return $this->neutralMinionsKilled;
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
	public function getNeutralMinionsKilledTeamJungle() {
		return $this->neutralMinionsKilledTeamJungle;
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
	public function getPhysicalDamageDealt() {
		return $this->physicalDamageDealt;
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
	public function getQuadraKills() {
		return $this->quadraKills;
	}

	/**
	 * @return int
	 */
	public function getSightWardsBoughtInGame() {
		return $this->sightWardsBoughtInGame;
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
	public function getTowerKills() {
		return $this->towerKills;
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
	public function getTrueDamageDealt() {
		return $this->trueDamageDealt;
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
	public function getUnrealKills() {
		return $this->unrealKills;
	}

	/**
	 * @return int
	 */
	public function getVisionWardsBoughtInGame() {
		return $this->visionWardsBoughtInGame;
	}

	/**
	 * @return int
	 */
	public function getWardsKilled() {
		return $this->wardsKilled;
	}

	/**
	 * @return int
	 */
	public function getWardsPlaced() {
		return $this->wardsPlaced;
	}

	/**
	 * @return boolean
	 */
	public function getIsWinner() {
		return $this->isWinner;
	}
}