<?php
namespace RiotAPILib\Dto;

class Translation {
	private $content, $locale, $updated_at;

	/**
	 * Translation constructor.
	 * @param $content
	 * @param $locale
	 * @param $updated_at
	 */
	public function __construct($content, $locale, $updated_at) {
		$this->content = $content;
		$this->locale = $locale;
		$this->updated_at = $updated_at;
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
		return $this->updated_at;
	}

}