<?php
namespace RiotAPILib\Dto;

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