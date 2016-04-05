<?php
namespace RiotAPILib\Dto\match;

class ParticipantIdentity {
	private $participantId;
	private $player;

	/**
	 * ParticipantIdentity constructor.
	 * @param $participantId
	 * @param $player
	 */
	public function __construct($participantId, $player) {
		$this->participantId = $participantId;
		$this->player = $player;
	}

	/**
	 * @return int
	 */
	public function getParticipantId() {
		return $this->participantId;
	}

	/**
	 * @return Player
	 */
	public function getPlayer() {
		return $this->player;
	}

}