<?php
class Movie extends CakeTestModel {
	var $name = 'Movie';
	var $useTable = 'movies';
	var $hasMany = array('Actor');
}

class Actor extends CakeTestModel {
	var $name = 'Actor';
	var $useTable = 'actors';
	var $belongsTo = array('Movie');
}

class Unicorn extends CakeTestModel {
	var $name = 'Unicorn';
	var $useTable = false;

	function beforeMake() {
		$this->beforeMakeArgs[] = func_get_args();
		return false;
	}
}
?>