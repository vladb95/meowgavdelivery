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
</head>
<body>
	<header>
		<nav role="menu">
			<ul>
			<li>
				<a href="?cat=first">
					<div>
						Первое
						
					</div>
				</a>
			</li>
			<li>
				<a href="?cat=second">
					<div>
						Второе
					</div>
				</a><div>
				</div>
			</li>
			<li>
				<a href="?cat=salat">
					<div>
						Салаты
					</div>
				</a><div>

				</div>
			</li>
			<li>
				<a href="?cat=drink">
					<div>
						Напитки
					</div>
				</a>
			</li>

			</ul>
			<div class="bsk border">
				<span class="glyphicon glyphicon-shopping-cart"></span>
					<a href="#" onclick="cart.clearBasket()" style="float: right; margin-top: 0px"><span class="glyphicon glyphicon-remove-circle"></span></a>
					<a href="#" style="margin-bottom:1px;" id="basketwidjet" onclick="cart.showWinow('bcontainer', 1)">Товаров 1 на сумму 25500</a> <span style="font: normal 11px Arial"></span>
				</div>
		</nav>
	</header>
<div id="wrapper-holder">
		<div id="wrapper">
logologo
			</div>
			<!--End of adblock-->
			<div class="content_block">
				<div id="content">
				
									<?PHP
											include_once("phplibs/class_item.php");
											$n=5;//кол-во товара на одну строку
											$width=200;//%
											$height=50;
											$tovar=new Tovar();
											$toolbar=new ToolBar();
											$toolbar->construct();
											$tovar->setSize($width,$height);
											$tovar->setStyle("#FF7373");
											$tovar->setMargin($n*$width+20*$n);//задать равноудаленность для товаров
												$link=mysqli_connect('mysql.hostinger.com.ua','u522145326_yan','zevzev','u522145326_meow');
												if(!$link) echo mysqli_connect_error();
												if($_GET['cat'])
												{
													$sql='SELECT * FROM acrm_menu WHERE cat="'.$_GET['cat'].'"';
												}
												else $sql='SELECT * FROM acrm_menu ORDER BY price';
											if($result = mysqli_query($link,$sql))
															{
																while($row = mysqli_fetch_assoc($result))
																{
																	$tovar->construct($row['name'],$row['descr'],$row['price'],$row['id'],$row['descr']);

																}
															}
					?>
				</div>
			</div>
</div>
</body>
</html>