<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    
    
<nav>
    <ul>
    <li><a  href="Home2.php">Home</a></li>
    <li><a href="shop.php">商城</a></li>
	<li style="position:absolute;left: 95%;"><a href="logout.php">登出</a></li>
    </ul>

</nav>
<div class="container">
<div id="myCarousel" class="carousel slide">
	<!-- 轮播（Carousel）指标 -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>   
	<!-- 轮播（Carousel）项目 -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="img/src1.jpg" alt="First slide">
			<!--<div class="carousel-caption" style="color: black;">标题 1</div>-->
		</div>
		<div class="item">
			<img src="img/src2.jpg" alt="Second slide" >
			<!--<div class="carousel-caption" style="color: black;">标题 2</div>-->
		</div>
		<div class="item">
			<img src="img/src3.jpg" alt="Third slide">
			<!--<div class="carousel-caption" style="color: black;">标题 3</div>-->
		</div>
	</div>
	<!-- 轮播（Carousel）导航 -->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	</a>
</div> 
</div>


</body>
</html>
