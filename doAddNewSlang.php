<?
	include ("conf.php");
	$BrandName = $_POST['BrandName'];
	$SlangName = $_POST['SlangName'];

	$query = mysql_query("INSERT INTO Slang (BrandName, SlangName) VALUES ('$BrandName', '$SlangName')") or die(mysql_error());
	echo '<script type="text/javascript">'.
		"alert('Slang Added!'); window.close()</script>";
?>