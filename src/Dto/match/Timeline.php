<?php
/**
 * Created by PhpStorm.
 * User: TOMO
 * Date: 2016/04/06
 * Time: 3:37
 */

namespace RiotAPILib\Dto\match;


class Timeline {
	private $frameInterval;
	private $frames;

	/**
	 * Timeline constructor.
	 * @param $frameInterval
	 * @param $frames
	 */
	public function __construct($frameInterval, $frames) {
		$this->frameInterval = $frameInterval;
		$this->frames = $frames;
	}

	/**
	 * @return mixed
	 */
	public function getFrameInterval() {
		return $this->frameInterval;
	}

	/**
	 * @return mixed
	 */
	public function getFrames() {
		return $this->frames;
	}

}