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
	<script>
	  $(function () {
		$('#chTab a:last').tab('show');
	  })
	</script>
  </head>

<body class="console">
<!--NAVBAR-->
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"></button>
          <a class="brand" href="./">Pro/g/ramming Challenges</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
				<li class="divider-vertical"></li>
			  
			  	<li class="active"><a href="#home" data-toggle="tab">Home</a></li>
		  		<li><a href="#profile" data-toggle="tab">Profile</a></li>
		  		<li><a href="#messages" data-toggle="tab">Messages</a></li>
		  		<li><a href="#settings" data-toggle="tab">Settings</a></li>
			  	<li class="">
               	 	<a href="#">Help</a>
              	</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
<!--/NAVBAR-->	

<!--BILLBOARD-->
<div class="container-fluid">
	<h1>&nbsp;<br>&nbsp;</h1>
      <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="row">
		<div class="span7">
			<div class="hero-unit text-center">
				<h0>100 Pro/g/ramming Challenges</h0>
			</div>
		</div>
	  	<div class="span5 tab-content">
		  	<div class="tab-pane active hero-unit" id="home">
			<?php getChallenge(0,24); ?>
			</div>
		  	<div class="tab-pane hero-unit" id="profile">
			<?php getChallenge(25,49); ?>
			</div>
    	  <div class="tab-pane hero-unit" id="messages">
			<?php getChallenge(50,74); ?>
			</div>
	  	  <div class="tab-pane hero-unit" id="settings">
			<?php getChallenge(75,99); ?>
			</div>
		</div>
	</div>
      
<!--/BILLBOARD-->
	
	
	
 	<footer>
		<div class="row">
			<div class="text-center span6">
				<p>Mail: <a href="mailto:contact@benjaminsanders.net">contact@benjaminsanders.net</a></p>
			</div>
			<div class="text-center span6">
				<p>Built on PHP, JavaScript, MySQL</p>
			</div>
		</div>
    </footer>
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
