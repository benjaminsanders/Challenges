<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>00 Name Generator</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/_386.css" rel="stylesheet">
    <link href="../assets/css/_386_dc.css" rel="stylesheet">
    <link href="../assets/css/_386_pre.css" rel="stylesheet">

  </head>

<body class="console">
<?php include_once('_nav.php'); ?>

<!--BILLBOARD-->
<div class="container">
	<h1>&nbsp;<br>&nbsp;</h1>
    <div class="row">
		<div class="span12">
			<div class="hero-unit">
				<h0>00 - NAME GENERATOR</h0>
			</div>
		</div>
		<div class="span3">
			<div class="hero-unit-warning">
				<form action="00.php" method="get">
				  <fieldset>
					<legend class="text-center"><h0>CONFIG</h0></legend>
					<label>GENDER</label>
					<label class="radio">
					  <input type="radio" name="gender" id="gender" value="M" <?php if(isset($_GET['gender'])){if($_GET['gender']=='M'){echo " checked";}}else{echo " checked";}?> >
					  MALE
					</label>
					<label class="radio">
					  <input type="radio" name="gender" id="gender" value="F" <?php if(isset($_GET['gender'])){if($_GET['gender']=='F'){echo " checked";}}?> >
					  FEMALE
					</label>
					  <hr>
					<label>SETTINGS</label>
					<label class="checkbox">
					  <input type="checkbox" name="novelty" id="novelty" value="TRUE" <?php if(isset($_GET['novelty'])){echo " checked";}?>>
					  NOVELTY MODE
					</label>
					<label class="checkbox">
					  <input type="checkbox" name="castle" id="castle" value="TRUE" <?php if(isset($_GET['castle'])){echo " checked";}?>>
					  MEDIVAL MODE
					</label>
					  <hr><br>
					<button type="submit" class="btn btn-block btn-large">GENERATE</button>
				  </fieldset>
				</form>
			</div>
		</div>
		<div class="span9">
			<div class="hero-unit-danger">
				
			</div>
		</div>
	</div>
      
<!--/BILLBOARD-->
<?php include_once('_footer.php'); ?>	
	
	

</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="../assets/js/widgets.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/386.js"></script>
    <script src="../assets/js/transition.js"></script>
    <script src="../assets/js/alert.js"></script>
    <script src="../assets/js/modal.js"></script>
    <script src="../assets/js/dropdown.js"></script>
    <script src="../assets/js/scrollspy.js"></script>
    <script src="../assets/js/tab.js"></script>
    <script src="../assets/js/tooltip.js"></script>
    <script src="../assets/js/popover.js"></script>
    <script src="../assets/js/button.js"></script>
    <script src="../assets/js/collapse.js"></script>
    <script src="../assets/js/carousel.js"></script>
    <script src="../assets/js/typeahead.js"></script>
    <script src="../assets/js/affix.js"></script>

    <script src="../assets/js/holder.js"></script>
    <script src="../assets/js/prettify.js"></script>

    <script src="../assets/js/application.js"></script>
  </body>
</html>
