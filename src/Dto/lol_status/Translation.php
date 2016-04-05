<?php
namespace RiotAPILib\Dto\lol_status;

class Translation {
	private $content, $locale, $updatedAt;

	/**
	 * Translation constructor.
	 * @param $content
	 * @param $locale
	 * @param $updatedAt
	 */
	public function __construct($content, $locale, $updatedAt) {
		$this->content = $content;
		$this->locale = $locale;
		$this->updatedAt = $updatedAt;
	}

	/**
	 * @return string
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * @return string
	 */
	public function getLocale() {
		return $this->locale;
	}

	/**
	 * @return string
	 */
	public function getUpdatedAt() {
		return $this->updatedAt;
	}

}