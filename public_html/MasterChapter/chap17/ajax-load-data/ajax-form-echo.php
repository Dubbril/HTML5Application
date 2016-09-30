<?php
$css_table = "border: solid 1px gray; border-collapse: collapse; font: 16px tahoma;";
$css_caption = "font: bold 18px tahoma; color: brown;";
$css_col1 = "width: 150px; background: #cdf;";
$css_col2 = "width: 350px;";
$css_th = "background: gray; color: white; border: solid 1px  navy; padding: 3px; vertical-align: top;";
$css_td = "border: solid 1px  navy; padding: 3px; vertical-align: top;";

if($_REQUEST || $_FILES) {
	echo "
		<table style=\"$css_table\">
			<caption style=\"$css_caption\">Form Data</caption>
			<colgroup>
				<col style=\"$css_col1\"><col style=\"$css_col2\">
			</colgroup>
			<tr><th style=\"$css_th\">Name</th><th style=\"$css_th\">Data</th></tr>
	";
	
	foreach($_REQUEST as $key => $value) {
		if(is_array($value)) {
			foreach($value as $v) {
				$v = stripslashes($v);
				echo "<tr><td style=\"$css_td\">$key</td><td style=\"$css_td\">$v</td></tr>";
			}
			continue;
		}
		$value = stripslashes($value);
		echo "<tr><td style=\"$css_td\">$key</td><td style=\"$css_td\">$value</td></tr>";
	}
	
	foreach($_FILES as $key => $value) {
		$value = "File (" . $_FILES[$key]['type'] . ")(" . $_FILES[$key]['name'] . ")";
		echo "<tr>	<td style=\"$css_td\">$key</td><td style=\"$css_td\">$value</td></tr>";
	}	
?>
</table>

<?php
}
?>