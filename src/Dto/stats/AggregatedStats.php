<?php
namespace RiotAPILib\Dto\stats;

class AggregatedStats {
	private $averageAssists, $averageChampionsKilled, $averageCombatPlayerScore, $averageNodeCapture,
		$averageNodeCaptureAssist, $averageNodeNeutralize, $averageNodeNeutralizeAssist, $averageNumDeaths,
		$averageObjectivePlayerScore, $averageTeamObjective, $averageTotalPlayerScore, $botGamesPlayed, $killingSpree,
		$maxAssists, $maxChampionsKilled, $maxCombatPlayerScore, $maxLargestCriticalStrike, $maxLargestKillingSpree,
		$maxNodeCapture, $maxNodeCaptureAssist, $maxNodeNeutralize, $maxNodeNeutralizeAssist, $maxNumDeaths,
		$maxObjectivePlayerScore, $maxTeamObjective, $maxTimePlayed, $maxTimeSpentLiving, $maxTotalPlayerScore,
		$mostChampionKillsPerSession, $mostSpellsCast, $normalGamesPlayed, $rankedPremadeGamesPlayed,
		$rankedSoloGamesPlayed, $totalAssists, $totalChampionKills, $totalDamageDealt, $totalDamageTaken,
		$totalDeathsPerSession, $totalDoubleKills, $totalFirstBlood, $totalGoldEarned, $totalHeal,
		$totalMagicDamageDealt, $totalMinionKills, $totalNeutralMinionsKilled, $totalNodeCapture, $totalNodeNeutralize,
		$totalPentaKills, $totalPhysicalDamageDealt, $totalQuadraKills, $totalSessionsLost, $totalSessionsPlayed,
		$totalSessionsWon, $totalTripleKills, $totalTurretsKilled, $totalUnrealKills;

	/**
	 * AggregatedStats constructor.
	 * @param $averageAssists
	 * @param $averageChampionsKilled
	 * @param $averageCombatPlayerScore
	 * @param $averageNodeCapture
	 * @param $averageNodeCaptureAssist
	 * @param $averageNodeNeutralize
	 * @param $averageNodeNeutralizeAssist
	 * @param $averageNumDeaths
	 * @param $averageObjectivePlayerScore
	 * @param $averageTeamObjective
	 * @param $averageTotalPlayerScore
	 * @param $botGamesPlayed
	 * @param $killingSpree
	 * @param $maxAssists
	 * @param $maxChampionsKilled
	 * @param $maxCombatPlayerScore
	 * @param $maxLargestCriticalStrike
	 * @param $maxLargestKillingSpree
	 * @param $maxNodeCapture
	 * @param $maxNodeCaptureAssist
	 * @param $maxNodeNeutralize
	 * @param $maxNodeNeutralizeAssist
	 * @param $maxNumDeaths
	 * @param $maxObjectivePlayerScore
	 * @param $maxTeamObjective
	 * @param $maxTimePlayed
	 * @param $maxTimeSpentLiving
	 * @param $maxTotalPlayerScore
	 * @param $mostChampionKillsPerSession
	 * @param $mostSpellsCast
	 * @param $normalGamesPlayed
	 * @param $rankedPremadeGamesPlayed
	 * @param $rankedSoloGamesPlayed
	 * @param $totalAssists
	 * @param $totalChampionKills
	 * @param $totalDamageDealt
	 * @param $totalDamageTaken
	 * @param $totalDeathsPerSession
	 * @param $totalDoubleKills
	 * @param $totalFirstBlood
	 * @param $totalGoldEarned
	 * @param $totalHeal
	 * @param $totalMagicDamageDealt
	 * @param $totalMinionKills
	 * @param $totalNeutralMinionsKilled
	 * @param $totalNodeCapture
	 * @param $totalNodeNeutralize
	 * @param $totalPentaKills
	 * @param $totalPhysicalDamageDealt
	 * @param $totalQuadraKills
	 * @param $totalSessionsLost
	 * @param $totalSessionsPlayed
	 * @param $totalSessionsWon
	 * @param $totalTripleKills
	 * @param $totalTurretsKilled
	 * @param $totalUnrealKills
	 */
	public function __construct($averageAssists, $averageChampionsKilled, $averageCombatPlayerScore,
								$averageNodeCapture, $averageNodeCaptureAssist, $averageNodeNeutralize,
								$averageNodeNeutralizeAssist, $averageNumDeaths, $averageObjectivePlayerScore,
								$averageTeamObjective, $averageTotalPlayerScore, $botGamesPlayed, $killingSpree,
								$maxAssists, $maxChampionsKilled, $maxCombatPlayerScore, $maxLargestCriticalStrike,
								$maxLargestKillingSpree, $maxNodeCapture, $maxNodeCaptureAssist, $maxNodeNeutralize,
								$maxNodeNeutralizeAssist, $maxNumDeaths, $maxObjectivePlayerScore, $maxTeamObjective,
								$maxTimePlayed, $maxTimeSpentLiving, $maxTotalPlayerScore, $mostChampionKillsPerSession,
								$mostSpellsCast, $normalGamesPlayed, $rankedPremadeGamesPlayed, $rankedSoloGamesPlayed,
								$totalAssists, $totalChampionKills, $totalDamageDealt, $totalDamageTaken,
								$totalDeathsPerSession, $totalDoubleKills, $totalFirstBlood, $totalGoldEarned,
								$totalHeal, $totalMagicDamageDealt, $totalMinionKills, $totalNeutralMinionsKilled,
								$totalNodeCapture, $totalNodeNeutralize, $totalPentaKills, $totalPhysicalDamageDealt,
								$totalQuadraKills, $totalSessionsLost, $totalSessionsPlayed, $totalSessionsWon,
								$totalTripleKills, $totalTurretsKilled, $totalUnrealKills) {
		$this->averageAssists = $averageAssists;
		$this->averageChampionsKilled = $averageChampionsKilled;
		$this->averageCombatPlayerScore = $averageCombatPlayerScore;
		$this->averageNodeCapture = $averageNodeCapture;
		$this->averageNodeCaptureAssist = $averageNodeCaptureAssist;
		$this->averageNodeNeutralize = $averageNodeNeutralize;
		$this->averageNodeNeutralizeAssist = $averageNodeNeutralizeAssist;
		$this->averageNumDeaths = $averageNumDeaths;
		$this->averageObjectivePlayerScore = $averageObjectivePlayerScore;
		$this->averageTeamObjective = $averageTeamObjective;
		$this->averageTotalPlayerScore = $averageTotalPlayerScore;
		$this->botGamesPlayed = $botGamesPlayed;
		$this->killingSpree = $killingSpree;
		$this->maxAssists = $maxAssists;
		$this->maxChampionsKilled = $maxChampionsKilled;
		$this->maxCombatPlayerScore = $maxCombatPlayerScore;
		$this->maxLargestCriticalStrike = $maxLargestCriticalStrike;
		$this->maxLargestKillingSpree = $maxLargestKillingSpree;
		$this->maxNodeCapture = $maxNodeCapture;
		$this->maxNodeCaptureAssist = $maxNodeCaptureAssist;
		$this->maxNodeNeutralize = $maxNodeNeutralize;
		$this->maxNodeNeutralizeAssist = $maxNodeNeutralizeAssist;
		$this->maxNumDeaths = $maxNumDeaths;
		$this->maxObjectivePlayerScore = $maxObjectivePlayerScore;
		$this->maxTeamObjective = $maxTeamObjective;
		$this->maxTimePlayed = $maxTimePlayed;
		$this->maxTimeSpentLiving = $maxTimeSpentLiving;
		$this->maxTotalPlayerScore = $maxTotalPlayerScore;
		$this->mostChampionKillsPerSession = $mostChampionKillsPerSession;
		$this->mostSpellsCast = $mostSpellsCast;
		$this->normalGamesPlayed = $normalGamesPlayed;
		$this->rankedPremadeGamesPlayed = $rankedPremadeGamesPlayed;
		$this->rankedSoloGamesPlayed = $rankedSoloGamesPlayed;
		$this->totalAssists = $totalAssists;
		$this->totalChampionKills = $totalChampionKills;
		$this->totalDamageDealt = $totalDamageDealt;
		$this->totalDamageTaken = $totalDamageTaken;
		$this->totalDeathsPerSession = $totalDeathsPerSession;
		$this->totalDoubleKills = $totalDoubleKills;
		$this->totalFirstBlood = $totalFirstBlood;
		$this->totalGoldEarned = $totalGoldEarned;
		$this->totalHeal = $totalHeal;
		$this->totalMagicDamageDealt = $totalMagicDamageDealt;
		$this->totalMinionKills = $totalMinionKills;
		$this->totalNeutralMinionsKilled = $totalNeutralMinionsKilled;
		$this->totalNodeCapture = $totalNodeCapture;
		$this->totalNodeNeutralize = $totalNodeNeutralize;
		$this->totalPentaKills = $totalPentaKills;
		$this->totalPhysicalDamageDealt = $totalPhysicalDamageDealt;
		$this->totalQuadraKills = $totalQuadraKills;
		$this->totalSessionsLost = $totalSessionsLost;
		$this->totalSessionsPlayed = $totalSessionsPlayed;
		$this->totalSessionsWon = $totalSessionsWon;
		$this->totalTripleKills = $totalTripleKills;
		$this->totalTurretsKilled = $totalTurretsKilled;
		$this->totalUnrealKills = $totalUnrealKills;
	}

	/**
	 * @return int
	 */
	public function getAverageAssists() {
		return $this->averageAssists;
	}

	/**
	 * @return int
	 */
	public function getAverageChampionsKilled() {
		return $this->averageChampionsKilled;
	}

	/**
	 * @return int
	 */
	public function getAverageCombatPlayerScore() {
		return $this->averageCombatPlayerScore;
	}

	/**
	 * @return int
	 */
	public function getAverageNodeCapture() {
		return $this->averageNodeCapture;
	}

	/**
	 * @return int
	 */
	public function getAverageNodeCaptureAssist() {
		return $this->averageNodeCaptureAssist;
	}

	/**
	 * @return int
	 */
	public function getAverageNodeNeutralize() {
		return $this->averageNodeNeutralize;
	}

	/**
	 * @return int
	 */
	public function getAverageNodeNeutralizeAssist() {
		return $this->averageNodeNeutralizeAssist;
	}

	/**
	 * @return int
	 */
	public function getAverageNumDeaths() {
		return $this->averageNumDeaths;
	}

	/**
	 * @return int
	 */
	public function getAverageObjectivePlayerScore() {
		return $this->averageObjectivePlayerScore;
	}

	/**
	 * @return int
	 */
	public function getAverageTeamObjective() {
		return $this->averageTeamObjective;
	}

	/**
	 * @return int
	 */
	public function getAverageTotalPlayerScore() {
		return $this->averageTotalPlayerScore;
	}

	/**
	 * @return int
	 */
	public function getBotGamesPlayed() {
		return $this->botGamesPlayed;
	}

	/**
	 * @return int
	 */
	public function getKillingSpree() {
		return $this->killingSpree;
	}

	/**
	 * @return int
	 */
	public function getMaxAssists() {
		return $this->maxAssists;
	}

	/**
	 * @return int
	 */
	public function getMaxChampionsKilled() {
		return $this->maxChampionsKilled;
	}

	/**
	 * @return int
	 */
	public function getMaxCombatPlayerScore() {
		return $this->maxCombatPlayerScore;
	}

	/**
	 * @return int
	 */
	public function getMaxLargestCriticalStrike() {
		return $this->maxLargestCriticalStrike;
	}

	/**
	 * @return int
	 */
	public function getMaxLargestKillingSpree() {
		return $this->maxLargestKillingSpree;
	}

	/**
	 * @return int
	 */
	public function getMaxNodeCapture() {
		return $this->maxNodeCapture;
	}

	/**
	 * @return int
	 */
	public function getMaxNodeCaptureAssist() {
		return $this->maxNodeCaptureAssist;
	}

	/**
	 * @return int
	 */
	public function getMaxNodeNeutralize() {
		return $this->maxNodeNeutralize;
	}

	/**
	 * @return int
	 */
	public function getMaxNodeNeutralizeAssist() {
		return $this->maxNodeNeutralizeAssist;
	}

	/**
	 * @return int
	 */
	public function getMaxNumDeaths() {
		return $this->maxNumDeaths;
	}

	/**
	 * @return int
	 */
	public function getMaxObjectivePlayerScore() {
		return $this->maxObjectivePlayerScore;
	}

	/**
	 * @return int
	 */
	public function getMaxTeamObjective() {
		return $this->maxTeamObjective;
	}

	/**
	 * @return int
	 */
	public function getMaxTimePlayed() {
		return $this->maxTimePlayed;
	}

	/**
	 * @return int
	 */
	public function getMaxTimeSpentLiving() {
		return $this->maxTimeSpentLiving;
	}

	/**
	 * @return int
	 */
	public function getMaxTotalPlayerScore() {
		return $this->maxTotalPlayerScore;
	}

	/**
	 * @return int
	 */
	public function getMostChampionKillsPerSession() {
		return $this->mostChampionKillsPerSession;
	}

	/**
	 * @return int
	 */
	public function getMostSpellsCast() {
		return $this->mostSpellsCast;
	}

	/**
	 * @return int
	 */
	public function getNormalGamesPlayed() {
		return $this->normalGamesPlayed;
	}

	/**
	 * @return int
	 */
	public function getRankedPremadeGamesPlayed() {
		return $this->rankedPremadeGamesPlayed;
	}

	/**
	 * @return int
	 */
	public function getRankedSoloGamesPlayed() {
		return $this->rankedSoloGamesPlayed;
	}

	/**
	 * @return int
	 */
	public function getTotalAssists() {
		return $this->totalAssists;
	}

	/**
	 * @return int
	 */
	public function getTotalChampionKills() {
		return $this->totalChampionKills;
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
	public function getTotalDamageTaken() {
		return $this->totalDamageTaken;
	}

	/**
	 * @return int
	 */
	public function getTotalDeathsPerSession() {
		return $this->totalDeathsPerSession;
	}

	/**
	 * @return int
	 */
	public function getTotalDoubleKills() {
		return $this->totalDoubleKills;
	}

	/**
	 * @return int
	 */
	public function getTotalFirstBlood() {
		return $this->totalFirstBlood;
	}

	/**
	 * @return int
	 */
	public function getTotalGoldEarned() {
		return $this->totalGoldEarned;
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
	public function getTotalMagicDamageDealt() {
		return $this->totalMagicDamageDealt;
	}

	/**
	 * @return int
	 */
	public function getTotalMinionKills() {
		return $this->totalMinionKills;
	}

	/**
	 * @return int
	 */
	public function getTotalNeutralMinionsKilled() {
		return $this->totalNeutralMinionsKilled;
	}

	/**
	 * @return int
	 */
	public function getTotalNodeCapture() {
		return $this->totalNodeCapture;
	}

	/**
	 * @return int
	 */
	public function getTotalNodeNeutralize() {
		return $this->totalNodeNeutralize;
	}

	/**
	 * @return int
	 */
	public function getTotalPentaKills() {
		return $this->totalPentaKills;
	}

	/**
	 * @return int
	 */
	public function getTotalPhysicalDamageDealt() {
		return $this->totalPhysicalDamageDealt;
	}

	/**
	 * @return int
	 */
	public function getTotalQuadraKills() {
		return $this->totalQuadraKills;
	}

	/**
	 * @return int
	 */
	public function getTotalSessionsLost() {
		return $this->totalSessionsLost;
	}

	/**
	 * @return int
	 */
	public function getTotalSessionsPlayed() {
		return $this->totalSessionsPlayed;
	}

	/**
	 * @return int
	 */
	public function getTotalSessionsWon() {
		return $this->totalSessionsWon;
	}

	/**
	 * @return int
	 */
	public function getTotalTripleKills() {
		return $this->totalTripleKills;
	}

	/**
	 * @return int
	 */
	public function getTotalTurretsKilled() {
		return $this->totalTurretsKilled;
	}

	/**
	 * @return int
	 */
	public function getTotalUnrealKills() {
		return $this->totalUnrealKills;
	}
}