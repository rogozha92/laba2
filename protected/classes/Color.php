<?php

class Color {

	private $name;
	private $displayName;
	private $code;
	
	public function Color($name, $displayName, $code) {
		$this -> name = $name;
		$this -> displayName = $displayName;
		$this -> code = $code;	
	}
	
	public function getName() {
		return $name;
	}
	
	public function getDisplayName() {
		return $displayName;
	}
	
	public function getCode() {
		return $code;
	}

}

?>
