<?php
//input validation
	function sanitize($dbC, $str)
	{
	$str = @trim($str);
	$str = strip_tags($str);
	
	return mysqli_real_escape_string($dbC,$str);
	}
?>