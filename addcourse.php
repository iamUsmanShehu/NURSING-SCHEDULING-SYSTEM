<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>
<html>
<head>
<style>
body {
	background-color: white;
}
</body>
</style>
</head>
<body>

<br><div class="container">

  <div class="row">
    <div class="col-lg-6">
		<div class="jumbotron">
		Here you will Assign Departments that are available in the hospital
		<form class="form-horizontal" method= "post" action = "add.cor.php">
			<fieldset>

			<!-- Form Name -->
			<legend>Add Department</legend>


			<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="corcode">Department Code</label>
				  <div class="col-md-5">
				  <input id="corcode" name="corcode" type="text" placeholder="" class="form-control input-md" required="">
				  </div>
				</div>


			<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="corname">Department Name</label>
				  <div class="col-md-5">
				  <input id="corname" name="corname" type="text" placeholder="" class="form-control input-md" required="">
				  </div>
				</div>

				<!-- Button -->
			<div class="form-group"  align="right" >
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-5">
				<button id="submit" name="submit" class="btn btn-success">Add Course</button>
			  </div>
			</div>

			</fieldset>
			</form>
		</div>
    </div>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
   include_once("navbar.php");
?>
