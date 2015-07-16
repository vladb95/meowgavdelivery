<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MeowGav Delivery</title>
	<link rel="stylesheet" type="text/css" href="css/new_menu.css">
	<link rel="stylesheet" type="text/css" href="css/item.css">
	<link href="css/m.css" rel="stylesheet">
	<link rel="stylesheet" href="css/dest/css/bootstrap.min.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="css/dest/js/bootstrap.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" ></script> 
	<script src="js/wicart.js"  type="text/javascript" ></script>
	
	<link href="css/wicart.css" type="text/css" rel="stylesheet">
	<script type="text/javascript">
		var cart;
	$(document).ready(function(){  
    	cart = new WICard("cart");
    	var config = {};
    	cart.init("basketwidjet", config);
	});
	</script>
	<script>
		$("#age").change(function(){
			alert("ssdsdsds");
			//var s=document.location.href;
			//document.location.href+=s.includes("?")?"&":"?"+$(this).val();
		}).change();
	</script>
</head>
<body>
	<header>
		<nav role="navigation">
			<ul>
			<li>
				<a href="/">
					<div>
						Главная
						
					</div>
				</a>
			</li>
			<li>
				<a href="/blog">
					<div>
						Собаки
						<span>товары для собак</span>
					</div>
				</a><div>
					<ul>
						<li><a href="#">Сухие корма</a></li>
						<li><a href="#">Консервы</a></li>
						<li><a href="#">Аксессуары</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="/contact">
					<div>
						Кошки
						<span>товары для кошек</span>
					</div>
				</a><div>
					<ul>
						<li><a href="#">Сухие корма</a></li>
						<li><a href="#">Консервы</a></li>
						<li><a href="#">Аксессуары</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="/forum">
					<div>
						Волонтерство
						<span>забота о животных</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/forum">
					<div>
						О нас
						<span>узнай о нас подробней</span>
					</div>
				</a>
			</li>
			
			</ul>
			<div class="bsk border">
				<span class="glyphicon glyphicon-shopping-cart"></span>
					<a href="#" onclick="cart.clearBasket()" style="float: right; margin-top: 4px"><span class="glyphicon glyphicon-remove-circle"></span></a>
					<a href="#" id="basketwidjet" onclick="cart.showWinow('bcontainer', 1)">Товаров 1 на сумму 25500</a> <span style="font: normal 11px Arial"></span>
				</div>
		</nav>
	</header>
<div id="wrapper-holder">
		<div id="wrapper">
			<div class="carousel slide" id="carousel-example" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example" data-slide-to="1"></li>
				<li data-target="#carousel-example" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img src="http://lorempixel.com/1170/300" alt="">
					<div class="carousel-caption">This is slide</div>
				</div>
				<div class="item">
					<img src="http://lorempixel.com/1170/300/food" alt="">
					<div class="carousel-caption">This is slide</div>
				</div>
				<div class="item">
					<img src="http://lorempixel.com/1170/300/city" alt="">
					<div class="carousel-caption">This is slide</div>
				</div>
			</div>
			<a href="#carousel-example" class="carousel-control left" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a href="#carousel-example" class="carousel-control right" data-slide="next">
				<span class="icon-next"></span>
			</a>
		</div>
			</div>
			<!--End of adblock-->
			<div class="content_block">
				<div id="content">
				
									<?PHP
											include_once("phplibs/class_item.php");
											$n=5;//кол-во товара на одну строку
											$width=200;
											$height=250;
											$tovar=new Tovar();
											$toolbar=new ToolBar();
											$toolbar->construct();
											$tovar->setSize($width,$height);
											$tovar->setStyle("#FF7373");
											$tovar->setMargin($n*$width+20*$n);//задать равноудаленность для товаров
											$odrer_query="";
											if($_GET['price']=="asc"){
												$odrer_query.=" ORDER BY price ASC";
											}elseif ($_GET['price']=="desc") {
												$odrer_query.=" ORDER BY price DESC";
											}
											switch($_GET['age']){
												case "jun":$odrer_query.=" WHERE `pet_age_id` = 1";
												break;
												case "pregnant":$odrer_query.=" WHERE `pet_age_id` = 2";
												break;
												case "adults":$odrer_query.=" WHERE `pet_age_id` = 3";
												break;
												case "grand":$odrer_query.=" WHERE `pet_age_id` = 4";
												break;
											}
												$link=mysqli_connect('mysql.hostinger.com.ua','u522145326_yan','zevzev','u522145326_meow');
												if(!$link) echo mysqli_connect_error();
											
											if($result = mysqli_query($link,"SELECT * FROM Product".$odrer_query))
															{$count=1;
																while($row = mysqli_fetch_assoc($result))
																{
																	$tovar->construct($row['product_name'],$row['src'],$row['price'],$row['id']);
																	if($count%$n==0)
																	{
																		echo "<br>";
																	}

																	$count++;
																}
															}
					?>
				</div>
			</div>
</div>
</body>
</html>