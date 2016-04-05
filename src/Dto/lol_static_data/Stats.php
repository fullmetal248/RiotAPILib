<?php
namespace RiotAPILib\Dto\lol_static_data;

class Stats {
	private $armor, $armorperlevel, $attackdamage, $attackdamageperlevel, $attackrange, $attackspeedoffset,
		$attackspeedperlevel, $crit, $critperlevel, $hp, $hpperlevel, $hpregen, $hpregenperlevel, $movespeed, $mp,
		$mpperlevel, $mpregen, $mpregenperlevel, $spellblock, $spellblockperlevel;

	/**
	 * Stats constructor.
	 * @param $armor
	 * @param $armorperlevel
	 * @param $attackdamage
	 * @param $attackdamageperlevel
	 * @param $attackrange
	 * @param $attackspeedoffset
	 * @param $attackspeedperlevel
	 * @param $crit
	 * @param $critperlevel
	 * @param $hp
	 * @param $hpperlevel
	 * @param $hpregen
	 * @param $hpregenperlevel
	 * @param $movespeed
	 * @param $mp
	 * @param $mpperlevel
	 * @param $mpregen
	 * @param $mpregenperlevel
	 * @param $spellblock
	 * @param $spellblockperlevel
	 */
	public function __construct($armor, $armorperlevel, $attackdamage, $attackdamageperlevel, $attackrange,
								$attackspeedoffset, $attackspeedperlevel, $crit, $critperlevel, $hp, $hpperlevel,
								$hpregen, $hpregenperlevel, $movespeed, $mp, $mpperlevel, $mpregen, $mpregenperlevel,
								$spellblock, $spellblockperlevel) {
		$this->armor = $armor;
		$this->armorperlevel = $armorperlevel;
		$this->attackdamage = $attackdamage;
		$this->attackdamageperlevel = $attackdamageperlevel;
		$this->attackrange = $attackrange;
		$this->attackspeedoffset = $attackspeedoffset;
		$this->attackspeedperlevel = $attackspeedperlevel;
		$this->crit = $crit;
		$this->critperlevel = $critperlevel;
		$this->hp = $hp;
		$this->hpperlevel = $hpperlevel;
		$this->hpregen = $hpregen;
		$this->hpregenperlevel = $hpregenperlevel;
		$this->movespeed = $movespeed;
		$this->mp = $mp;
		$this->mpperlevel = $mpperlevel;
		$this->mpregen = $mpregen;
		$this->mpregenperlevel = $mpregenperlevel;
		$this->spellblock = $spellblock;
		$this->spellblockperlevel = $spellblockperlevel;
	}

	/**
	 * @return double
	 */
	public function getArmor() {
		return $this->armor;
	}

	/**
	 * @return double
	 */
	public function getArmorperlevel() {
		return $this->armorperlevel;
	}

	/**
	 * @return double
	 */
	public function getAttackdamage() {
		return $this->attackdamage;
	}

	/**
	 * @return double
	 */
	public function getAttackdamageperlevel() {
		return $this->attackdamageperlevel;
	}

	/**
	 * @return double
	 */
	public function getAttackrange() {
		return $this->attackrange;
	}

	/**
	 * @return double
	 */
	public function getAttackspeedoffset() {
		return $this->attackspeedoffset;
	}

	/**
	 * @return double
	 */
	public function getAttackspeedperlevel() {
		return $this->attackspeedperlevel;
	}

	/**
	 * @return double
	 */
	public function getCrit() {
		return $this->crit;
	}

	/**
	 * @return double
	 */
	public function getCritperlevel() {
		return $this->critperlevel;
	}

	/**
	 * @return double
	 */
	public function getHp() {
		return $this->hp;
	}

	/**
	 * @return double
	 */
	public function getHpperlevel() {
		return $this->hpperlevel;
	}

	/**
	 * @return double
	 */
	public function getHpregen() {
		return $this->hpregen;
	}

	/**
	 * @return double
	 */
	public function getHpregenperlevel() {
		return $this->hpregenperlevel;
	}

	/**
	 * @return double
	 */
	public function getMovespeed() {
		return $this->movespeed;
	}

	/**
	 * @return double
	 */
	public function getMp() {
		return $this->mp;
	}

	/**
	 * @return double
	 */
	public function getMpperlevel() {
		return $this->mpperlevel;
	}

	/**
	 * @return double
	 */
	public function getMpregen() {
		return $this->mpregen;
	}

	/**
	 * @return double
	 */
	public function getMpregenperlevel() {
		return $this->mpregenperlevel;
	}

	/**
	 * @return double
	 */
	public function getSpellblock() {
		return $this->spellblock;
	}

	/**
	 * @return double
	 */
	public function getSpellblockperlevel() {
		return $this->spellblockperlevel;
	}

}