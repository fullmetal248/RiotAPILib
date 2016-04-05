<?php
namespace RiotAPILib\Dto\featured_games;

class Observer {
	private $encryptionKey;

	/**
	 * Observer constructor.
	 * @param $encryptionKey
	 */
	public function __construct($encryptionKey) {
		$this->encryptionKey = $encryptionKey;
	}

	/**
	 * @return mixed
	 */
	public function getEncryptionKey() {
		return $this->encryptionKey;
	}
}