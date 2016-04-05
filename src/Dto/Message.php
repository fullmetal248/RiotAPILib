<?php
namespace RiotAPILib\Dto;

use RiotAPILib\Dto\Collection\DtoArrayList;

class Message {
	private $author, $content, $createdAt;
	private $id;
	private $severity;
	private $translations;
	private $updatedAt;

	/**
	 * Message constructor.
	 * @param $author
	 * @param $content
	 * @param $createdAt
	 * @param $id
	 * @param $severity
	 * @param $translations
	 * @param $updatedAt
	 */
	public function __construct($author, $content, $createdAt, $id, $severity, $translations, $updatedAt) {
		$this->author = $author;
		$this->content = $content;
		$this->createdAt = $createdAt;
		$this->id = $id;
		$this->severity = $severity;
		$this->translations = $translations;
		$this->updatedAt = $updatedAt;
	}

	/**
	 * @return string
	 */
	public function getAuthor() {
		return $this->author;
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
	public function getCreatedAt() {
		return $this->createdAt;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getSeverity() {
		return $this->severity;
	}

	/**
	 * @return DtoArrayList
	 */
	public function getTranslations() {
		return $this->translations;
	}

	/**
	 * @return string
	 */
	public function getUpdatedAt() {
		return $this->updatedAt;
	}

}