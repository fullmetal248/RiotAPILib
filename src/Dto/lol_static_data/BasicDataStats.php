<?php
namespace RiotAPILib\Dto\lol_static_data;

class BasicDataStats {
	private $flatArmorMod, $FlatAttackSpeedMod, $FlatBlockMod, $FlatCritChanceMod, $FlatCritDamageMod, $FlatEXPBonus,
		$FlatEnergyPoolMod, $FlatEnergyRegenMod, $FlatHPPoolMod, $FlatHPRegenMod, $FlatMPPoolMod, $FlatMPRegenMod,
		$FlatMagicDamageMod, $FlatMovementSpeedMod, $FlatPhysicalDamageMod, $FlatSpellBlockMod, $PercentArmorMod,
		$PercentAttackSpeedMod, $PercentBlockMod, $PercentCritChanceMod, $PercentCritDamageMod, $PercentDodgeMod,
		$PercentEXPBonus, $PercentHPPoolMod, $PercentHPRegenMod, $PercentLifeStealMod, $PercentMPPoolMod,
		$PercentMPRegenMod, $PercentMagicDamageMod, $PercentMovementSpeedMod, $PercentPhysicalDamageMod,
		$PercentSpellBlockMod, $PercentSpellVampMod, $rFlatArmorModPerLevel, $rFlatArmorPenetrationMod,
		$rFlatArmorPenetrationModPerLevel, $rFlatCritChanceModPerLevel, $rFlatCritDamageModPerLevel, $rFlatDodgeMod,
		$rFlatDodgeModPerLevel, $rFlatEnergyModPerLevel, $rFlatEnergyRegenModPerLevel, $rFlatGoldPer10Mod,
		$rFlatHPModPerLevel, $rFlatHPRegenModPerLevel, $rFlatMPModPerLevel, $rFlatMPRegenModPerLevel,
		$rFlatMagicDamageModPerLevel, $rFlatMagicPenetrationMod, $rFlatMagicPenetrationModPerLevel,
		$rFlatMovementSpeedModPerLevel, $rFlatPhysicalDamageModPerLevel, $rFlatSpellBlockModPerLevel, $rFlatTimeDeadMod,
		$rFlatTimeDeadModPerLevel, $rPercentArmorPenetrationMod, $rPercentArmorPenetrationModPerLevel,
		$rPercentAttackSpeedModPerLevel, $rPercentCooldownMod, $rPercentCooldownModPerLevel,
		$rPercentMagicPenetrationMod, $rPercentMagicPenetrationModPerLevel, $rPercentMovementSpeedModPerLevel,
		$rPercentTimeDeadMod, $rPercentTimeDeadModPerLevel;

	/**
	 * BasicDataStats constructor.
	 * @param $flatArmorMod
	 * @param $FlatAttackSpeedMod
	 * @param $FlatBlockMod
	 * @param $FlatCritChanceMod
	 * @param $FlatCritDamageMod
	 * @param $FlatEXPBonus
	 * @param $FlatEnergyPoolMod
	 * @param $FlatEnergyRegenMod
	 * @param $FlatHPPoolMod
	 * @param $FlatHPRegenMod
	 * @param $FlatMPPoolMod
	 * @param $FlatMPRegenMod
	 * @param $FlatMagicDamageMod
	 * @param $FlatMovementSpeedMod
	 * @param $FlatPhysicalDamageMod
	 * @param $FlatSpellBlockMod
	 * @param $PercentArmorMod
	 * @param $PercentAttackSpeedMod
	 * @param $PercentBlockMod
	 * @param $PercentCritChanceMod
	 * @param $PercentCritDamageMod
	 * @param $PercentDodgeMod
	 * @param $PercentEXPBonus
	 * @param $PercentHPPoolMod
	 * @param $PercentHPRegenMod
	 * @param $PercentLifeStealMod
	 * @param $PercentMPPoolMod
	 * @param $PercentMPRegenMod
	 * @param $PercentMagicDamageMod
	 * @param $PercentMovementSpeedMod
	 * @param $PercentPhysicalDamageMod
	 * @param $PercentSpellBlockMod
	 * @param $PercentSpellVampMod
	 * @param $rFlatArmorModPerLevel
	 * @param $rFlatArmorPenetrationMod
	 * @param $rFlatArmorPenetrationModPerLevel
	 * @param $rFlatCritChanceModPerLevel
	 * @param $rFlatCritDamageModPerLevel
	 * @param $rFlatDodgeMod
	 * @param $rFlatDodgeModPerLevel
	 * @param $rFlatEnergyModPerLevel
	 * @param $rFlatEnergyRegenModPerLevel
	 * @param $rFlatGoldPer10Mod
	 * @param $rFlatHPModPerLevel
	 * @param $rFlatHPRegenModPerLevel
	 * @param $rFlatMPModPerLevel
	 * @param $rFlatMPRegenModPerLevel
	 * @param $rFlatMagicDamageModPerLevel
	 * @param $rFlatMagicPenetrationMod
	 * @param $rFlatMagicPenetrationModPerLevel
	 * @param $rFlatMovementSpeedModPerLevel
	 * @param $rFlatPhysicalDamageModPerLevel
	 * @param $rFlatSpellBlockModPerLevel
	 * @param $rFlatTimeDeadMod
	 * @param $rFlatTimeDeadModPerLevel
	 * @param $rPercentArmorPenetrationMod
	 * @param $rPercentArmorPenetrationModPerLevel
	 * @param $rPercentAttackSpeedModPerLevel
	 * @param $rPercentCooldownMod
	 * @param $rPercentCooldownModPerLevel
	 * @param $rPercentMagicPenetrationMod
	 * @param $rPercentMagicPenetrationModPerLevel
	 * @param $rPercentMovementSpeedModPerLevel
	 * @param $rPercentTimeDeadMod
	 * @param $rPercentTimeDeadModPerLevel
	 */
	public function __construct($flatArmorMod, $FlatAttackSpeedMod, $FlatBlockMod, $FlatCritChanceMod,
								$FlatCritDamageMod, $FlatEXPBonus, $FlatEnergyPoolMod, $FlatEnergyRegenMod,
								$FlatHPPoolMod, $FlatHPRegenMod, $FlatMPPoolMod, $FlatMPRegenMod, $FlatMagicDamageMod,
								$FlatMovementSpeedMod, $FlatPhysicalDamageMod, $FlatSpellBlockMod, $PercentArmorMod,
								$PercentAttackSpeedMod, $PercentBlockMod, $PercentCritChanceMod, $PercentCritDamageMod,
								$PercentDodgeMod, $PercentEXPBonus, $PercentHPPoolMod, $PercentHPRegenMod,
								$PercentLifeStealMod, $PercentMPPoolMod, $PercentMPRegenMod, $PercentMagicDamageMod,
								$PercentMovementSpeedMod, $PercentPhysicalDamageMod, $PercentSpellBlockMod,
								$PercentSpellVampMod, $rFlatArmorModPerLevel, $rFlatArmorPenetrationMod,
								$rFlatArmorPenetrationModPerLevel, $rFlatCritChanceModPerLevel,
								$rFlatCritDamageModPerLevel, $rFlatDodgeMod, $rFlatDodgeModPerLevel,
								$rFlatEnergyModPerLevel, $rFlatEnergyRegenModPerLevel, $rFlatGoldPer10Mod,
								$rFlatHPModPerLevel, $rFlatHPRegenModPerLevel, $rFlatMPModPerLevel,
								$rFlatMPRegenModPerLevel, $rFlatMagicDamageModPerLevel, $rFlatMagicPenetrationMod,
								$rFlatMagicPenetrationModPerLevel, $rFlatMovementSpeedModPerLevel,
								$rFlatPhysicalDamageModPerLevel, $rFlatSpellBlockModPerLevel, $rFlatTimeDeadMod,
								$rFlatTimeDeadModPerLevel, $rPercentArmorPenetrationMod,
								$rPercentArmorPenetrationModPerLevel, $rPercentAttackSpeedModPerLevel,
								$rPercentCooldownMod, $rPercentCooldownModPerLevel, $rPercentMagicPenetrationMod,
								$rPercentMagicPenetrationModPerLevel, $rPercentMovementSpeedModPerLevel,
								$rPercentTimeDeadMod, $rPercentTimeDeadModPerLevel) {
		$this->flatArmorMod = $flatArmorMod;
		$this->FlatAttackSpeedMod = $FlatAttackSpeedMod;
		$this->FlatBlockMod = $FlatBlockMod;
		$this->FlatCritChanceMod = $FlatCritChanceMod;
		$this->FlatCritDamageMod = $FlatCritDamageMod;
		$this->FlatEXPBonus = $FlatEXPBonus;
		$this->FlatEnergyPoolMod = $FlatEnergyPoolMod;
		$this->FlatEnergyRegenMod = $FlatEnergyRegenMod;
		$this->FlatHPPoolMod = $FlatHPPoolMod;
		$this->FlatHPRegenMod = $FlatHPRegenMod;
		$this->FlatMPPoolMod = $FlatMPPoolMod;
		$this->FlatMPRegenMod = $FlatMPRegenMod;
		$this->FlatMagicDamageMod = $FlatMagicDamageMod;
		$this->FlatMovementSpeedMod = $FlatMovementSpeedMod;
		$this->FlatPhysicalDamageMod = $FlatPhysicalDamageMod;
		$this->FlatSpellBlockMod = $FlatSpellBlockMod;
		$this->PercentArmorMod = $PercentArmorMod;
		$this->PercentAttackSpeedMod = $PercentAttackSpeedMod;
		$this->PercentBlockMod = $PercentBlockMod;
		$this->PercentCritChanceMod = $PercentCritChanceMod;
		$this->PercentCritDamageMod = $PercentCritDamageMod;
		$this->PercentDodgeMod = $PercentDodgeMod;
		$this->PercentEXPBonus = $PercentEXPBonus;
		$this->PercentHPPoolMod = $PercentHPPoolMod;
		$this->PercentHPRegenMod = $PercentHPRegenMod;
		$this->PercentLifeStealMod = $PercentLifeStealMod;
		$this->PercentMPPoolMod = $PercentMPPoolMod;
		$this->PercentMPRegenMod = $PercentMPRegenMod;
		$this->PercentMagicDamageMod = $PercentMagicDamageMod;
		$this->PercentMovementSpeedMod = $PercentMovementSpeedMod;
		$this->PercentPhysicalDamageMod = $PercentPhysicalDamageMod;
		$this->PercentSpellBlockMod = $PercentSpellBlockMod;
		$this->PercentSpellVampMod = $PercentSpellVampMod;
		$this->rFlatArmorModPerLevel = $rFlatArmorModPerLevel;
		$this->rFlatArmorPenetrationMod = $rFlatArmorPenetrationMod;
		$this->rFlatArmorPenetrationModPerLevel = $rFlatArmorPenetrationModPerLevel;
		$this->rFlatCritChanceModPerLevel = $rFlatCritChanceModPerLevel;
		$this->rFlatCritDamageModPerLevel = $rFlatCritDamageModPerLevel;
		$this->rFlatDodgeMod = $rFlatDodgeMod;
		$this->rFlatDodgeModPerLevel = $rFlatDodgeModPerLevel;
		$this->rFlatEnergyModPerLevel = $rFlatEnergyModPerLevel;
		$this->rFlatEnergyRegenModPerLevel = $rFlatEnergyRegenModPerLevel;
		$this->rFlatGoldPer10Mod = $rFlatGoldPer10Mod;
		$this->rFlatHPModPerLevel = $rFlatHPModPerLevel;
		$this->rFlatHPRegenModPerLevel = $rFlatHPRegenModPerLevel;
		$this->rFlatMPModPerLevel = $rFlatMPModPerLevel;
		$this->rFlatMPRegenModPerLevel = $rFlatMPRegenModPerLevel;
		$this->rFlatMagicDamageModPerLevel = $rFlatMagicDamageModPerLevel;
		$this->rFlatMagicPenetrationMod = $rFlatMagicPenetrationMod;
		$this->rFlatMagicPenetrationModPerLevel = $rFlatMagicPenetrationModPerLevel;
		$this->rFlatMovementSpeedModPerLevel = $rFlatMovementSpeedModPerLevel;
		$this->rFlatPhysicalDamageModPerLevel = $rFlatPhysicalDamageModPerLevel;
		$this->rFlatSpellBlockModPerLevel = $rFlatSpellBlockModPerLevel;
		$this->rFlatTimeDeadMod = $rFlatTimeDeadMod;
		$this->rFlatTimeDeadModPerLevel = $rFlatTimeDeadModPerLevel;
		$this->rPercentArmorPenetrationMod = $rPercentArmorPenetrationMod;
		$this->rPercentArmorPenetrationModPerLevel = $rPercentArmorPenetrationModPerLevel;
		$this->rPercentAttackSpeedModPerLevel = $rPercentAttackSpeedModPerLevel;
		$this->rPercentCooldownMod = $rPercentCooldownMod;
		$this->rPercentCooldownModPerLevel = $rPercentCooldownModPerLevel;
		$this->rPercentMagicPenetrationMod = $rPercentMagicPenetrationMod;
		$this->rPercentMagicPenetrationModPerLevel = $rPercentMagicPenetrationModPerLevel;
		$this->rPercentMovementSpeedModPerLevel = $rPercentMovementSpeedModPerLevel;
		$this->rPercentTimeDeadMod = $rPercentTimeDeadMod;
		$this->rPercentTimeDeadModPerLevel = $rPercentTimeDeadModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getFlatArmorMod() {
		return $this->flatArmorMod;
	}

	/**
	 * @return double
	 */
	public function getFlatAttackSpeedMod() {
		return $this->FlatAttackSpeedMod;
	}

	/**
	 * @return double
	 */
	public function getFlatBlockMod() {
		return $this->FlatBlockMod;
	}

	/**
	 * @return double
	 */
	public function getFlatCritChanceMod() {
		return $this->FlatCritChanceMod;
	}

	/**
	 * @return double
	 */
	public function getFlatCritDamageMod() {
		return $this->FlatCritDamageMod;
	}

	/**
	 * @return double
	 */
	public function getFlatEXPBonus() {
		return $this->FlatEXPBonus;
	}

	/**
	 * @return double
	 */
	public function getFlatEnergyPoolMod() {
		return $this->FlatEnergyPoolMod;
	}

	/**
	 * @return double
	 */
	public function getFlatEnergyRegenMod() {
		return $this->FlatEnergyRegenMod;
	}

	/**
	 * @return double
	 */
	public function getFlatHPPoolMod() {
		return $this->FlatHPPoolMod;
	}

	/**
	 * @return double
	 */
	public function getFlatHPRegenMod() {
		return $this->FlatHPRegenMod;
	}

	/**
	 * @return double
	 */
	public function getFlatMPPoolMod() {
		return $this->FlatMPPoolMod;
	}

	/**
	 * @return double
	 */
	public function getFlatMPRegenMod() {
		return $this->FlatMPRegenMod;
	}

	/**
	 * @return double
	 */
	public function getFlatMagicDamageMod() {
		return $this->FlatMagicDamageMod;
	}

	/**
	 * @return double
	 */
	public function getFlatMovementSpeedMod() {
		return $this->FlatMovementSpeedMod;
	}

	/**
	 * @return double
	 */
	public function getFlatPhysicalDamageMod() {
		return $this->FlatPhysicalDamageMod;
	}

	/**
	 * @return double
	 */
	public function getFlatSpellBlockMod() {
		return $this->FlatSpellBlockMod;
	}

	/**
	 * @return double
	 */
	public function getPercentArmorMod() {
		return $this->PercentArmorMod;
	}

	/**
	 * @return double
	 */
	public function getPercentAttackSpeedMod() {
		return $this->PercentAttackSpeedMod;
	}

	/**
	 * @return double
	 */
	public function getPercentBlockMod() {
		return $this->PercentBlockMod;
	}

	/**
	 * @return double
	 */
	public function getPercentCritChanceMod() {
		return $this->PercentCritChanceMod;
	}

	/**
	 * @return double
	 */
	public function getPercentCritDamageMod() {
		return $this->PercentCritDamageMod;
	}

	/**
	 * @return double
	 */
	public function getPercentDodgeMod() {
		return $this->PercentDodgeMod;
	}

	/**
	 * @return double
	 */
	public function getPercentEXPBonus() {
		return $this->PercentEXPBonus;
	}

	/**
	 * @return double
	 */
	public function getPercentHPPoolMod() {
		return $this->PercentHPPoolMod;
	}

	/**
	 * @return double
	 */
	public function getPercentHPRegenMod() {
		return $this->PercentHPRegenMod;
	}

	/**
	 * @return double
	 */
	public function getPercentLifeStealMod() {
		return $this->PercentLifeStealMod;
	}

	/**
	 * @return double
	 */
	public function getPercentMPPoolMod() {
		return $this->PercentMPPoolMod;
	}

	/**
	 * @return double
	 */
	public function getPercentMPRegenMod() {
		return $this->PercentMPRegenMod;
	}

	/**
	 * @return double
	 */
	public function getPercentMagicDamageMod() {
		return $this->PercentMagicDamageMod;
	}

	/**
	 * @return double
	 */
	public function getPercentMovementSpeedMod() {
		return $this->PercentMovementSpeedMod;
	}

	/**
	 * @return double
	 */
	public function getPercentPhysicalDamageMod() {
		return $this->PercentPhysicalDamageMod;
	}

	/**
	 * @return double
	 */
	public function getPercentSpellBlockMod() {
		return $this->PercentSpellBlockMod;
	}

	/**
	 * @return double
	 */
	public function getPercentSpellVampMod() {
		return $this->PercentSpellVampMod;
	}

	/**
	 * @return double
	 */
	public function getRFlatArmorModPerLevel() {
		return $this->rFlatArmorModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRFlatArmorPenetrationMod() {
		return $this->rFlatArmorPenetrationMod;
	}

	/**
	 * @return double
	 */
	public function getRFlatArmorPenetrationModPerLevel() {
		return $this->rFlatArmorPenetrationModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRFlatCritChanceModPerLevel() {
		return $this->rFlatCritChanceModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRFlatCritDamageModPerLevel() {
		return $this->rFlatCritDamageModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRFlatDodgeMod() {
		return $this->rFlatDodgeMod;
	}

	/**
	 * @return double
	 */
	public function getRFlatDodgeModPerLevel() {
		return $this->rFlatDodgeModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRFlatEnergyModPerLevel() {
		return $this->rFlatEnergyModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRFlatEnergyRegenModPerLevel() {
		return $this->rFlatEnergyRegenModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRFlatGoldPer10Mod() {
		return $this->rFlatGoldPer10Mod;
	}

	/**
	 * @return double
	 */
	public function getRFlatHPModPerLevel() {
		return $this->rFlatHPModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRFlatHPRegenModPerLevel() {
		return $this->rFlatHPRegenModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRFlatMPModPerLevel() {
		return $this->rFlatMPModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRFlatMPRegenModPerLevel() {
		return $this->rFlatMPRegenModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRFlatMagicDamageModPerLevel() {
		return $this->rFlatMagicDamageModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRFlatMagicPenetrationMod() {
		return $this->rFlatMagicPenetrationMod;
	}

	/**
	 * @return double
	 */
	public function getRFlatMagicPenetrationModPerLevel() {
		return $this->rFlatMagicPenetrationModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRFlatMovementSpeedModPerLevel() {
		return $this->rFlatMovementSpeedModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRFlatPhysicalDamageModPerLevel() {
		return $this->rFlatPhysicalDamageModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRFlatSpellBlockModPerLevel() {
		return $this->rFlatSpellBlockModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRFlatTimeDeadMod() {
		return $this->rFlatTimeDeadMod;
	}

	/**
	 * @return double
	 */
	public function getRFlatTimeDeadModPerLevel() {
		return $this->rFlatTimeDeadModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRPercentArmorPenetrationMod() {
		return $this->rPercentArmorPenetrationMod;
	}

	/**
	 * @return double
	 */
	public function getRPercentArmorPenetrationModPerLevel() {
		return $this->rPercentArmorPenetrationModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRPercentAttackSpeedModPerLevel() {
		return $this->rPercentAttackSpeedModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRPercentCooldownMod() {
		return $this->rPercentCooldownMod;
	}

	/**
	 * @return double
	 */
	public function getRPercentCooldownModPerLevel() {
		return $this->rPercentCooldownModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRPercentMagicPenetrationMod() {
		return $this->rPercentMagicPenetrationMod;
	}

	/**
	 * @return double
	 */
	public function getRPercentMagicPenetrationModPerLevel() {
		return $this->rPercentMagicPenetrationModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRPercentMovementSpeedModPerLevel() {
		return $this->rPercentMovementSpeedModPerLevel;
	}

	/**
	 * @return double
	 */
	public function getRPercentTimeDeadMod() {
		return $this->rPercentTimeDeadMod;
	}

	/**
	 * @return double
	 */
	public function getRPercentTimeDeadModPerLevel() {
		return $this->rPercentTimeDeadModPerLevel;
	}
}