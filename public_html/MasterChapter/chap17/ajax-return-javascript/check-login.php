<?php
	header("content-type: text/javascript; charset=tis-620");

	$logins = array("aaa", "bbb");
	
	if(in_array($_GET['login'] , $logins)) {
		$script = "$('#login').val(' ');";
		$script .= "alert('��͡�Թ����ռ��������');";
		echo $script;
	}
	else {
		echo  "alert('��͡�Թ�������');";
	}
?>