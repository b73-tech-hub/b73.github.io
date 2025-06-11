<!DOCTYPE html>
<html>
<head>
	<title>B73 TECH HUB</title>
	<link rel="icon" type="image/png" href="/images/B73_LOGO.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="home_style1.css">

</head>
<body>

      <!--slider test-->

    <div class="home_image">
        <!--home slider-->
        <div class="slideshow-container">

            <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="/b73/images/printer.jpeg" style="width:100vw; height: 100vh; opacity:0.9;">
            <div class="text"></div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="/b73/images/theshop.jpg" style="width:100vw; height: 100vh; opacity:0.9;">
            <div class="text"></div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="/b73/images/services.jpg" style="width:100vw; height: 100vh; opacity: 0.9;">
            <div class="text"></div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <br>

            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            </div>

        <div class="home_text">
            <h3 style="font-size: 8vw;">B73 Tech Hub</h3>
            <p>The Hub for all your basic computer needs</p>
        </div>
    </div><br>

    <h2 style="text-align: center;">Get started</h2>
     <div class="get_started_caterogy">
        <a href="services.php">
            <h2>Services</h2>
            secretarial services <br>
            Basic computer skills training<br>
            Youth empowerment programs
        </a>
	    <a href="lessons.php">
		    <h2>Lessons</h2>
            Microsoft Office Suit <br>
            Touch typing <br>
            Basic Internet
        </a>
	    
 
	</div><br><br>
    

    <?php include "footer.php";?>
  <script src="home_script.js"></script>
</body>
</html>

	
