<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<?php

		$this -> load -> view('sections/head');
		?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
	</head>

	<body>
		<div id="header">
			<div id="nav" class="navbar">
				<div class="navbar-inner">
					<a class="brand" href="#">My Urban Drive</a>
					<ul class="nav">
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">About Us</a>
						</li>
						<li>
							<a href="#">Products & Services</a>
						</li>
						<li>
							<a href="#">Car Stock</a>
						</li>
						<li>
							<a href="#">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="contentView">
			<?php
			
			$this->load->view($contentView);
			
			?>
		</div>
		<div id="footer">

		</div>

	</body>

</html>