<?php 
	include("conf.php");

	$SlangID = $_REQUEST['SlangID'];

	$query = mysql_query("UPDATE Slang SET SlangPositiveVote = SlangPositiveVote + 1 WHERE SlangID = '$SlangID'") or die(mysql_error());

	header("Location:index.php");
 ?>