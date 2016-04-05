<?php
namespace RiotAPILib\Dto\Collection;

class DtoArrayList implements DtoList {
	private $values = [];

	public function getIterator() {
		return new \ArrayIterator($this->values);
	}

	public function offsetExists($offset) {
		return isset($this->values[$offset]);
	}

	public function offsetGet($offset) {
		if (isset($this->values[$offset])) {
			return $this->values[$offset];
		}
		return null;
	}

	public function offsetSet($offset, $value) {
		$this->values[$offset] = $value;
	}

	public function offsetUnset($offset) {
		unset($this->values[$offset]);
	}

	public function count() {
		return count($this->values);
	}
}