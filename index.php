<?php
	ini_set('display_errors',1);
	include ("includes/functions.php"); 
?>
<!DOCTYPE html>
<html>
	<head>
		<?php 
		echo head();
		?>
	</head>
	<body onLoad="startTimer()">
		
		<!-- container -->
		<div class="container">
			<!-- 
			<pre>
			<?
				print_r($_SERVER["SCRIPT_URL"]);
			?>
			</pre>
			--> 
			
			<!-- header -->
			<div id="header">
				<!-- title -->
				<div class="row">
					<div class="col-md-3 pull-left"><img src="img/banner-left.png"></div>
					<div class="col-md-6"><h1>Boyd's Used Motors</h1></div>
					<div class="col-md-3 pull-right"><img src="img/banner-right.png"></div>
				</div>
				<!-- motd -->
				<h2 id="motd">A name you can surely trust!</h2>
				
				<!-- navigation -->
				<?php include ('includes/menu.php'); ?>
				
			</div><!-- /header -->
			
			
			<!-- main content -->
			<div id="content" class="row">
				
				
				<div class="col-md-7">
					<p>Welcome to Boyd's Used Motors!!! We have some of the finest cars with only minor problems.</p>
					
					<p>We have been voted best car company in the UK by our employees 8 years running. <br/>Boyd's Used Motors has been running for over 13 years selling reliable used cars to the first person to walk in the door.</p>
					
					<p>We saw you coming and made a special price just for you! That's the quality service you can expect from our friendly staff.</p>
					
					<h2>Current Weather in Mount Batten</h2>
					<?php 
						$json = file_get_contents("http://comp2203.ecs.soton.ac.uk/labs/lab3/api/location.php?location=3827");
						$data = json_decode($json);
						/*
						echo "<pre>";
						print_r($data);
						echo "</pre>";
						echo"($data->id)";
						*/
					?>
					<p> Country: <?php echo($data->country)?></p>
					<p>	Temperature: <?php echo($data->weather->temperature)?></p>
					<p>	Weather Type: <?php echo($data->weather->weatherType)?></p>
					<p>	Wind Speed: <?php echo ($data->weather->wind->speed)?></p>

					
					
				</div>
				
				<!-- sidebar -->
				<div id="sidebar" class="col-md-4 pull-right">
					<img src="img/sales-boyd.png" width="100%" class="img-rounded"></img>
					<p class="caption text-muted">Our trustworthy staff, sales lad Boyd!</p>
					
					<img src='img/car-blue.png' id="car" height="256px" />
					<h4>View our range of colours available for new cars today!</h4>
					
					<p class="btn btn-primary" onClick="changeCar()">Click here to get a random car colour</p>
				</div><!-- /sidebar -->
				
				
				
			</div><!-- /main content -->
			
			
			<!-- footer -->
			<?php include ('includes/foot.php'); ?>
			<!-- /footer -->
			
			
		</div><!-- /container -->
					
	</body>
</html>