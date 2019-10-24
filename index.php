<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Challenges</title>
	  <style>
		  #alert {
			  display: none;
			  align-self: center;
			  align-content: center;
			  height: 50px;
			  width: 100%;
			  border: medium double #05090D;
			  background-color: #151515;
			  color: white;
		  }
		  
		  #alert h2{
			  font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", "monospace";
		  }
		  
		  #frame, iframe {
			width: 984px;
			height: 624px;
			margin: 0 auto;
			background-color: #777;
		   }
		  body
		  {
			  background-color: #151515;
		  }
		  
		  @media only screen and (max-height: 624px) {
			#frame, iframe {
				display: none;
				width: 0px;
			    height: 0px;
			}
			#alert {
			  display: block !important;
		    }
		  }
		   @media only screen and (max-width: 990px) {
			#frame, iframe {
				display: none;
				width: 0px;
			    height: 0px;
			}
			#alert {
			  display: block !important;
		    }
		  }
	  </style>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
			window.onresize = displayWindowSize;
			window.onload = displayWindowSize;

			function displayWindowSize() {
				myWidth = window.innerWidth;
				myHeight = window.innerHeight;
				// your size calculation code here
				document.getElementById("dimensions").innerHTML = "Current: " + myWidth + "x" + myHeight + "px";
			};
		</script>
  </head>

		<body>
			<div id="alert" align="left">
				<h1 align="center">This device does not have the resolution to render this page properly.</h1>
				<hr><h2 id="dimensions"></h2><h2>Minimum: 990x624px</h2><hr>
			</div>
			<div id="frame">
				
				<iframe src="https://nightbyte.net/data/CH/console/" width="984" height="624" align="middle" scrolling="no" ></iframe>
				
			</div>
			
		</body>
</html>
