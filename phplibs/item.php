
<meta charset="windows-1251">
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MeowGav Delivery</title>
	<link rel="stylesheet" type="text/css" href="css/new_menu.css">
	<link rel="stylesheet" type="text/css" href="css/item.css">
	<link href="css/m.css" rel="stylesheet">
    <script src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/controllers/pageController.js"></script>
	
</head>
<body ng-app="petsStore">
	<header>
		<nav role="navigation">
			<ul>
			<li>
				<a href="/">
					<div>
						Главная122
						<span>товары для животных</span>
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
						<span>все для кошек</span>
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
		</nav>
	</header>
<div id="wrapper-holder">
		<div id="wrapper">
			<div class="main_ad_block">
				<a ng-href="index.html"><img class="logo" src="content/logo.gif"></a>
			</div>
				<div id="ads">		
						<!--<div class="ad_only_block">-->
							<img class="ad_cant" src="content/1.png">
						<!--</div>-->
						РЕКЛАМА
				</div>
			</div>
			<!--End of adblock-->
			<div class="content_block">
				<div id="content">
					<?PHP
						include_once("class_item.php");
						$n=5;//кол-во товара на одну строку
						$width=200;
						$height=250;
						$content_width=$n*$width+20*$n;
						$upload=new Upload();
						$tovar=new Tovar();
						$tovar->setSize($width,$height);
						$tovar->setColor("#FF7373");
echo"<style>#content{
max-width:".$content_width."px;
margin:0px auto;
}</style>";
							$link=mysqli_connect('localhost','u157733656_yan','zev1982z','u157733656_solar');
							if(!$link) echo mysqli_connect_error();
						if($result = mysqli_query($link,"SELECT * FROM item"))
										{$count=1;
											while($row = mysqli_fetch_assoc($result))
											{
												$tovar->construct($row['name'],$row['url'],$row['price'],$row['id']);
												if($count%$n==0)
												{
													echo "<br>";
												}

												$count++;
											}
										}

						if(isset($_POST['upload']))
						{
							$upload->load($_POST['price'],$_POST['name']);
						}
					?>
				</div>
			</div>
</div>
</body>
</html>
