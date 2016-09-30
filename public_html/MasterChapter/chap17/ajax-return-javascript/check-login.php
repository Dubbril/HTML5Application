<?php
	header("content-type: text/javascript; charset=tis-620");

	$logins = array("aaa", "bbb");
	
	if(in_array($_GET['login'] , $logins)) {
		$script = "$('#login').val(' ');";
		$script .= "alert('ล็อกอินนี้มีผู้ใช้แล้ว');";
		echo $script;
	}
	else {
		echo  "alert('ล็อกอินนี้ใช้ได้');";
	}
?>