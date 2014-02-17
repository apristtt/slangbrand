<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Slangbrand</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
	body{
		background-color: #2c3e50;
	}
	.container{
/*		background-color: #FFFFFF;
		height: 680px;
		min-height: 100%;*/
	}
	</style>
	<script type="text/javascript">
	function addNewSlang () {
		window.open('addNewSlang.php','addNewSlangWindow','width=650,height=400,toolbar=no,location=no,directories=no,menubar=no')
	}

	function makePositiveSlang() {
		window.open('makePositiveSlang.php','makePositiveSlangWindow','width=100,height=100,toolbar=no,location=no,directories=no,menubar=no')
	}

	function makeNegativeSlang() {
		window.open('makeNegativeSlang.php','makeNegativeSlangWindow','width=100,height=100,toolbar=no,location=no,directories=no,menubar=no')
	}
	</script>
</head>
<body>
<?php 
	include 'conf.php';
	$result = mysql_query("SELECT * FROM Slang ORDER by RAND() LIMIT 1") or die(mysql_error());
	while ($query = mysql_fetch_array($result)) {	
 ?>
	<div class="container">
		<div class="panel panel-default" style="margin-top: 15%; margin-bottom: 1%">
			<div class="panel-body">
					<h1><? echo $query['SlangName'] ?> = <small><u><a href="https://www.google.com/search?client=ubuntu&channel=fs&q=<? echo $query['BrandName'] ?>&ie=utf-8&oe=utf-8"><? echo $query['BrandName'] ?></a></u></small></h1>
			</div>
			<div class="panel-footer">
				<a href="makePositiveSlang.php?SlangID=<? echo $query['SlangID'] ?>">
					<button class="btn btn-primary btn-lg">
						<span class="glyphicon glyphicon-thumbs-up"></span> <span class="badge"><? echo $query['SlangPositiveVote'] ?></span>
					</button>
				</a>
				<a href="makeNegativeSlang.php?SlangID=<? echo $query['SlangID'] ?>">
					<button class="btn btn-danger btn-lg">
						<span class="glyphicon glyphicon-thumbs-down"></span> <span class="badge"><? echo $query['SlangNegativeVote'] ?></span>
					</button>
				</a>
			</div>
		</div>
		<button class="btn btn-success pull-right" onclick="addNewSlang();"><span class="glyphicon glyphicon-plus"></span> Add New Slang</button>
	</div>
	<?	 }	?>
</body>
</html>