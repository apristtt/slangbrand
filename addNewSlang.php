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
	</style>
	<script type="text/javascript">
	function addNewSlang () {
		window.open('addNewSlang.php','addNewSlangWindow','width=400,height=200,toolbar=no,location=no,directories=no,menubar=no')
	}
	</script>
</head>
<body>
<?php 
	include 'conf.php';
?>
	<div class="container">
		<div class="page-header">
			<h3 style="color:#FFFFFF;">Add New Slang</h3>
		</div>
		<div class="panel panel-default" style="margin-top: 5%; margin-bottom: 25%">
		<form role="form" action="doAddNewSlang.php" method="POST">
			<div class="panel-body">
				<div class="form-group">
					<label>Brand name</label>
					<input type="text" name="BrandName" class="form-control" placeholder="Type brand to make slang">
				</div>
				<div class="form-group">
					<label>Slang words for brand</label>
					<input type="text" name="SlangName" class="form-control" placeholder="Type slang for brand here">
				</div>
				<div class="form-group">
					<button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add New Slang</button>
				</div>
			</div>
		</form>
		</div>
	</div>
	<!-- <?	 //}	?> -->
</body>
</html>