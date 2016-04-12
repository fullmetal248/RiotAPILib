<?php
namespace RiotAPILib\endpoints;

class BaseEndPoint {
	protected $targetUrl;
	protected $apiKey;
	protected $region;
	protected $param;

	/**
	 * BaseEndPoint constructor.
	 * @param $apiKey
	 * @param $region
	 * @param $param
	 */
	public function __construct($apiKey, $region, $param=[]) {
		$this->apiKey = $apiKey;
		$this->region = $region;
		$this->param = $param;
	}

	/**
	 * @return string
	 */
	public function getTargetUrl() {
		return $this->targetUrl;
	}

	/**
	 * @return array
	 */
	public function getParam() {
		return $this->param;
	}
}