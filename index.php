<?php
class PLS3 {
	
	protected $itemsArray = '';
	
	public function __construct() {
		$this->doIt();
		exit;
	}
	
	public function doIt() {
		if(count($this->itemsArray) > 1){
			foreach($this->itemsArray as $item) {
				exit;
			}
		}
	}
}
?>
