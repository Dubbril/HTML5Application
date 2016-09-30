<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="author" content="Banchar Paseelatesang">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery Mobile</title>
<link rel="stylesheet" href="../jqm/jquery.mobile-1.3.1.min.css">
<script src="../jquery-2.0.0.min.js"> </script>
<script src="../jqm/jquery.mobile-1.3.1.min.js"> </script>
</head>

<body>
<?php
if($_REQUEST || $_FILES) {
?>
<table border="1">
<caption>Form Data</caption>
<tr><th>Name</th><th>Value</th></tr>
<?php
	foreach($_REQUEST as $key => $value) {
		if(is_array($value)) {
			foreach($value as $v) {
				$v = stripslashes($v);
				echo "<tr><td>$key</td><td>$v</td></tr>";
			}
			continue;
		}
		$value = stripslashes($value);
		echo "<tr><td>$key</td><td>$value</td></tr>";
	}
	
	foreach($_FILES as $key => $value) {
		$value = "File (" . $_FILES[$key]['type'] . ")(" . $_FILES[$key]['name'] . ")";
		echo "<tr>	<td>$key</td><td>$value</td></tr>";
	}	
?>
</table>

<?php
}
?>
</body>
</html>