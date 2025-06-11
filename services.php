<!DOCTYPE html>
<html lang="en">
<head>
	<title>B73 TECH HUB</title>
	<link rel="icon" type="image/png" href="/b73/images/B73_LOGO.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="services_style.css">
    <meta charset="utf-8">
  
</head>
<body>
	<?php include 'navbar.php';?>
	
	</nav>
	
	<div class="services"><br>
		<div class="services_buttons">
			<script src="services_script1.js"></script>
			<button class="display_Btn" type="button" onclick="display_secretarial()">
				<h3>Secretarial services</h3>
			</button>
			   
			<button class="display_Btn" type="button" onclick="display_lessons()">
				<h3>Basic Computer Skills Training</h3>
			</button>
			   
			<button class="display_Btn" type="button" onclick="display_empower()">
				<h3>Youth empowerment programs</h3>
			</button>
		</div><br>
		   
		<!--view screen after clicking any button on top-->
		<div id="display_view" class="display_view">
			<div id="display_secretarial" class="display_secretarial" style="display: none;">
			<ul class="s_items">
						<li>Photocopying</li>
						<li>Printing</li>
						<li>Laminating</li>
						<li>Scanning</li>
						<li>Typing</li>
				   </ul>
			</div>
		  
			<div id="display_lessons" class="display_lessons" style="display: none;">
				<ul class="c_items">
					<li>MS Word</li>
					<li>MS Excel</li>
					<li>MS PowerPoint</li>
					<li>Touch Typing</li>
					<li>Internet</li>
					<li>OS Installation</li>
				</ul>
			</div>
			
			<div id="display_empower" class="display_empower" style="display: none;">
				<ul class="e_items">
					<li>GLOW Girls</li>
					<li>Tennis</li>
				</ul>
			</div>
		</div>
	</div>
	<br><br><br>
</div>

	<?php include "footer.php";?>
</body>
</html>
