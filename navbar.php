
<div class="nav_menu" id="nav_menu">
	<a href="javascript:void(0);" class="closeBtn" onclick="closeMenu()">x</a>
	<a href="index.php">Home</a>
	<a href="services.php">Services</a>
	<a href="lessons.php">Lessons</a>
	<a href="about.php">About</a>
</div>
<div class="header">
    <strong style = "font-size: 2.5vh;">B73 TECH HUB</strong>
    <a class= "openBtn" onclick="openMenu()">☰</a>
</div>
	


<style>
    .header{
        background-color:#0D1721;
        height: 30px;
        padding: 10px 5px;
    }
    .header a:hover{
        color: white;
    }

    .openBtn{
        cursor: pointer;
        text-decoration: none;
        color: rgba(156, 160, 163, 0.736);
        font-size: 20px;
        position: absolute;
        right: 5%;
    }

    .nav_menu{
        position: fixed;
        background-color:#0D1721;
        z-index: 1;
        width: 0;
        top: 1;
        right: 0;
        height: 250px;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 40px;
        opacity: 0.9;
    }
        
    .nav_menu a{
        text-decoration: none;
        display: block;
        color: white;
        padding: 10px;
    }

    .nav_menu a:hover{
        color: #223c56;
    }


    .nav_menu .closeBtn{
        position: absolute;
        right: 25px;
        top: 0;
        font-size: 36px;
    }
</style>

<script src="script.js"></script>


	
	
	   

