<?php include_once('../assets/func/main.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Challenges</title>

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
      <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="row">
		<div class="span7">
			<div class="hero-unit text-center">
				<h0>100 Pro/g/ramming Challenges</h0>
				<h6>/g/'s Programming Challenges v1.3 by !LiNuXCQGns</h6>
				<hr>
				<p class="text6"><?php getBlockChart(); ?></p>
			</div>
			<div class="hero-unit-warning text-center">
				<h0>CHALLENGE LIST SELECTION</h0><br>
				<a href="#00" data-toggle="tab"><span class="badge badge-warning"><h0>00-24</h0></span></a>
				<a href="#25" data-toggle="tab"><span class="badge badge-warning"><h0>25-49</h0></span></a>
				<a href="#50" data-toggle="tab"><span class="badge badge-warning"><h0>50-74</h0></span></a>
				<a href="#75" data-toggle="tab"><span class="badge badge-warning"><h0>75-99</h0></span></a>
			</div>
			<div class="hero-unit-danger text-center">
				<h0>Reserved Area Bravo</h0>
			</div>
		</div>
	  	<div class="span5">
			<div class="hero-unit tab-content">
				<hr>
				<a href="#00" data-toggle="tab" class="h4">00-19</a>|
				<a href="#20" data-toggle="tab" class="h4">20-39</a>|
				<a href="#40" data-toggle="tab" class="h4">40-59</a>|
				<a href="#60" data-toggle="tab" class="h4">60-79</a>|
				<a href="#80" data-toggle="tab" class="h4">80-99</a> 
				<hr>
				<div class="tab-pane active " id="00">
				<?php getChallenge(0,19); ?>
				</div>
				<div class="tab-pane" id="20">
				<?php getChallenge(20,39); ?>
				</div>
			  <div class="tab-pane" id="40">
				<?php getChallenge(40,59); ?>
				</div>
			  <div class="tab-pane" id="60">
				<?php getChallenge(60,79); ?>
				</div>
			  <div class="tab-pane" id="80">
				<?php getChallenge(80,99); ?>
				</div>
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
