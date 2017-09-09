<?php
	$con = mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "casi");
	mysqli_query($con, "SET NAMES 'utf8'");
	
	class CaSi {
		public $KEY;
		public $NAME;
		public $IMAGE;
		public $COMMENT;
		public $LINK;
		function __construct($key, $name, $image, $comment, $link){
			$this->KEY = $key;
			$this->NAME = $name;
			$this->IMAGE = $image;
			$this->COMMENT = $comment;
			$this->LINK = $link;
		}
	}
?>