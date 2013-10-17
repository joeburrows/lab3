				<div class="row">
					<div class="col-md-12">
						<ul class="nav nav-tabs">
							<li <?php if(stristr($_SERVER["SCRIPT_URL"], "index.php")) echo 'class="active"'; ?>><a href="index.php">Home</a></li>
							<li <?php if(stristr($_SERVER["SCRIPT_URL"], "finances.php")) echo 'class="active"'; ?>><a href="finances.php">Finances</a></li>
							<li <?php if(stristr($_SERVER["SCRIPT_URL"], "about.php")) echo 'class="active"'; ?>><a href="about.php">About</a></li>
							<li <?php if(stristr($_SERVER["SCRIPT_URL"], "contact.php")) echo 'class="active"'; ?>><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
				</div>