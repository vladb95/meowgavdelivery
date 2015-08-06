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

<div id="order" class="popup">
	<a href="#" onclick="cart.closeWindow('order', 0)" style="float:right"><img src="data:image/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABpFBMVEUAAABEREBEREBEREBEREASEhEJCQgGBgYBAQEAAAAGBgUHBwYAAAAAAAADAwNEREBEREAJCQkICAcGBgYFBQUJCQgnJyVEREAICAgBAQEAAAAICAcAAAAAAAAAAAAJCQgAAAAGBgYBAQEQEA8NDQwHBwcBAQEMDAsSEhEJCQkBAQEBAQEBAQFAQDxEREBEREADAwIAAAABAQESEhEkJCIAAAAICAgAAAAQEA9EREAAAAATExIAAAAKCgkNDQwAAAAAAAABAQETExIHBwcDAwMDAwMTExIAAAAAAAABAQEAAAAAAAAAAAAAAAAAAAAAAAADAwIAAAAGBgUBAQEWFhUAAAAAAAAHBwYBAQEVFRMDAwMHBwcUFBMWFhUBAQETExIAAAAAAAADAwMMDAsAAAAAAAASEhEAAAAUFBMAAAAJCQkrKygDAwMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAwMAAAAJCQgAAAAiIiABAQEAAAAAAAAAAAAAAAAAAAAAAAAAAAABAQFEREAFBQUBAQEAAAAGBgYICAgHBwcBAQEJW8x2AAAAhXRSTlMAAQcIAjJ0kZqZnp+LaygNDxKw/v6wIwPY1A+upf4nenGWvXCg/Pubc8eSmLkcHxpW+vlhBr6hl3EDUl9pop5Q+fhe+1FPXVT8mlxfXWD9+1dbnPRRRved9ldI+Fhd+mBaVlSYWJN1V2dqwwVTA8ORvJXAknRzKii2rCjc3BUTqagrepgUbRZwswAAAAlwSFlzAAAASAAAAEgARslrPgAAAb1JREFUOMuNk2dTwkAQhpdiCZagotiwd5RYQeyKJdii2FDsvffeG0TJnza3lzg4kBnv0zt5NpvdZ3IA/zs6vUGv00wAxrj4hESGnERTkomk5JRU1swaFZ6WnhEMieSEgl9qsmRmWVWe/R2W8KkUjkw5uUr/vNhcEvPpLHEZGly0FYA8pb4wqMFFscioBzAU06lKSsvKKa+orKqmqYY1yB3smGvrHFx9A0mNTQ6uuQU7Oc1yB50Lc6uDc0ObXNHYTlIHfqmTJaZcmLvkpwDdPb19hAODkzjRlAuzpx93GhhEPsTjpF6gBTg1PyxnN4d8hHKJoQUhuhU/qvKxcWVTWmAPKlsLE5RP8qoJLND5vhQ/U9PIYWZWNcWgyTnFpH+ecoCFgNKTQZM+atK/qHI3txSg73gjTC6vIF9dw0nXhSiTG8g3eaEeJ92KMrlN+I4gSp5dkvaiTO4fAKwJ6PQQ4Og4wuQJ3fp070zZXzhJOafpAgsuQ2Gtf+4KC64tWtx2gybZW61/8g7QpPn+ITZ/fAI0yVqfX2wx+r8+gxVNkl3f3j+cnU4v3j4vSa73NwDrJ5qkt+f3Jv5N6u3Vvt0/UGcpYbC85ecAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTMtMDUtMThUMDY6MDM6MzEtMDU6MDALk1CfAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDEzLTA1LTE4VDA2OjAzOjMxLTA1OjAwes7oIwAAAABJRU5ErkJggg==">
	</a>
	<h4>Введите Ваши контактные данные</h4>

	<form id="formToSend" method="POST" action="">
	<input id="fio" name="fio" type="text" placeholder="Ваши фамилия и имя"  class="" />
	<input id="city" name="city" type="text" placeholder="Город"  class="validate[required] text-input"/>
	<input id="phone" name="phone" type="text" placeholder="Контактный телефон" class="validate[required] text-input"/>
	<input id="email" name="email" type="text" placeholder="Электронная почта" class="" />
	<input name="orders_info" id="orders_info" type="text" />
	<!--textarea id="question" placeholder="Адрес"></textarea-->
		<input type="submit" name="send" class='send' onclick="/*cart.sendOrder('formToSend,overflw,bsum');*/" value="Отправить заказ"/>
	</form>


</div>


<script>
function showPopup(idtovar,name,url,price,manufact,pet_type_id,description)
{
	document.getElementById('azaz1').style.display="block";
	this.IMG = "iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABpFBMVEUAAABEREBEREBEREBEREASEhEJCQgGBgYBAQEAAAAGBgUHBwYAAAAAAAADAwNEREBEREAJCQkICAcGBgYFBQUJCQgnJyVEREAICAgBAQEAAAAICAcAAAAAAAAAAAAJCQgAAAAGBgYBAQEQEA8NDQwHBwcBAQEMDAsSEhEJCQkBAQEBAQEBAQFAQDxEREBEREADAwIAAAABAQESEhEkJCIAAAAICAgAAAAQEA9EREAAAAATExIAAAAKCgkNDQwAAAAAAAABAQETExIHBwcDAwMDAwMTExIAAAAAAAABAQEAAAAAAAAAAAAAAAAAAAAAAAADAwIAAAAGBgUBAQEWFhUAAAAAAAAHBwYBAQEVFRMDAwMHBwcUFBMWFhUBAQETExIAAAAAAAADAwMMDAsAAAAAAAASEhEAAAAUFBMAAAAJCQkrKygDAwMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAwMAAAAJCQgAAAAiIiABAQEAAAAAAAAAAAAAAAAAAAAAAAAAAAABAQFEREAFBQUBAQEAAAAGBgYICAgHBwcBAQEJW8x2AAAAhXRSTlMAAQcIAjJ0kZqZnp+LaygNDxKw/v6wIwPY1A+upf4nenGWvXCg/Pubc8eSmLkcHxpW+vlhBr6hl3EDUl9pop5Q+fhe+1FPXVT8mlxfXWD9+1dbnPRRRved9ldI+Fhd+mBaVlSYWJN1V2dqwwVTA8ORvJXAknRzKii2rCjc3BUTqagrepgUbRZwswAAAAlwSFlzAAAASAAAAEgARslrPgAAAb1JREFUOMuNk2dTwkAQhpdiCZagotiwd5RYQeyKJdii2FDsvffeG0TJnza3lzg4kBnv0zt5NpvdZ3IA/zs6vUGv00wAxrj4hESGnERTkomk5JRU1swaFZ6WnhEMieSEgl9qsmRmWVWe/R2W8KkUjkw5uUr/vNhcEvPpLHEZGly0FYA8pb4wqMFFscioBzAU06lKSsvKKa+orKqmqYY1yB3smGvrHFx9A0mNTQ6uuQU7Oc1yB50Lc6uDc0ObXNHYTlIHfqmTJaZcmLvkpwDdPb19hAODkzjRlAuzpx93GhhEPsTjpF6gBTg1PyxnN4d8hHKJoQUhuhU/qvKxcWVTWmAPKlsLE5RP8qoJLND5vhQ/U9PIYWZWNcWgyTnFpH+ecoCFgNKTQZM+atK/qHI3txSg73gjTC6vIF9dw0nXhSiTG8g3eaEeJ92KMrlN+I4gSp5dkvaiTO4fAKwJ6PQQ4Og4wuQJ3fp070zZXzhJOafpAgsuQ2Gtf+4KC64tWtx2gybZW61/8g7QpPn+ITZ/fAI0yVqfX2wx+r8+gxVNkl3f3j+cnU4v3j4vSa73NwDrJ5qkt+f3Jv5N6u3Vvt0/UGcpYbC85ecAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTMtMDUtMThUMDY6MDM6MzEtMDU6MDALk1CfAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDEzLTA1LTE4VDA2OjAzOjMxLTA1OjAwes7oIwAAAABJRU5ErkJggg==";
document.getElementById('azaz1').innerHTML="<div id='bcontainer_item' class='bcontainer_item'> <button id='bclose_item' class='no_background' onclick='document.getElementById(\"azaz1\").style.display=\"none\";'><img src='data:image/jpeg;base64,"+ this.IMG + "' /></button><div id='bsubject_item'>"+"<div id='photo'><img style='width:250px;' src='content/"+url+"'/></div><div id='info' class='infobox'><div id='item_name'>"+name+"</div><div id='item_price'>Цена: <b style='color:red;'>"+price+"</b> грн.</div><div id='item_buy><div id='detailslink' align='left'><br/><button class='button more_width' onclick='cart.addToCart(this, `"+idtovar+"`, `"+name+"`, `"+price+"`)'>Добавить в корзину</button><br/></div><div id='details'>Описание:"+description+"</div></div></div>"
+"</div></div>";
}
</script>

<script>
//this.onload=function(){alert(localStorage.getItem("basketwidjet['ID4']"));}
</script>
							<div id='azaz1' class='azaz1' style="display:none;"></div>
	<header>
		<nav role="navigation">
			<ul class="main_ul">
			<li>
				<a href="/">
					<div>
						Главная
						
					</div>
				</a>
			</li>
			<li>
				<a href="?type=dog">
					<div>
						Собаки
						<span class="span">товары для собак</span>
					</div>
				</a><div>
					<ul>
						<li><a href="?type=dog&product=corms">Сухие корма</a></li>
						<li><a href="?type=dog&product=conserv">Консервы</a></li>
						<li><a href="?type=dog&product=accessories">Аксессуары</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="?type=cat">
					<div>
						Кошки
						<span class="span">товары для кошек</span>
					</div>
				</a><div>
					<ul>
						<li><a href="?type=cat&product=corms">Сухие корма</a></li>
						<li><a href="?type=cat&product=conserv">Консервы</a></li>
						<li><a href="?type=cat&product=accessories">Аксессуары</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="/voluntary.php">
					<div>
						Волонтерство
						<span class="span">забота о животных</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/about.php">
					<div>
						О нас
						<span class="span">узнай о нас подробней</span>
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
		<?PHP
		include_once('phplibs/slider.php');
		$slider = new Slider();

		?>

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
											//$settings = new SliderSettings();
											include_once("phplibs/class_item.php");
											$n=5;//кол-во товара на одну строку
											$width=200;
											$height=270;
											$tovar=new Tovar();
											$toolbar=new ToolBar();
											$toolbar->construct();
											$tovar->setSize($width,$height);
											$tovar->setStyle("#FF7373");
											$tovar->setMargin($n*$width+20*$n);//задать равноудаленность для товаров
											$odrer_query="";
											$title="Главная";
											switch($_GET['age']){
												case "jun":$odrer_query.=" WHERE `pet_age_id` = 1";
												break;
												case "pregnant":$odrer_query.=" WHERE `pet_age_id` = 2";
												break;
												case "adults":$odrer_query.=" WHERE `pet_age_id` = 3";
												break;
												case "grand":$odrer_query.=" WHERE `pet_age_id` = 4";
												break ;
												default:$odrer_query.=" WHERE `pet_age_id` !=0"; break;
											}
											switch($_GET['type']){
												case "dog":$odrer_query.=" AND `pet_type_id` = 1";
													$title="Собаки ";
												break;
												case "cat":$odrer_query.=" AND `pet_type_id` = 2";
													$title="Кошки ";
												break;
												default:$odrer_query.=" AND `pet_type_id` !=0"; break;
											}
											switch($_GET['product']){
												case "conserv":$odrer_query.=" AND `product_type_id` = 2";
													$title.="| Консервы";
												break;
												case "accessories":$odrer_query.=" AND `product_type_id` = 3";
													$title.="| Аксессуары";
												break;
												case "corms":$odrer_query.=" AND `product_type_id` = 1";
													$title.="| Сухие корма";
												break;
												default:$odrer_query.=" AND `product_type_id` !=0"; break;
											}
											switch($_GET['size']){
												case "small":$odrer_query.=" AND `pet_size_id` = 1";
												break;
												case "medium":$odrer_query.=" AND `pet_size_id` = 2";
												break;
												case "big":$odrer_query.=" AND `pet_size_id` = 3";
												break;
												default:$odrer_query.=" AND `pet_size_id` !=0"; break;
											}
											if($_GET['search'])
											{
												$odrer_query.=" AND product_name LIKE '%".$_GET['search']."%'";
											}
											if($_GET['price']=="asc"){
												$odrer_query.=" ORDER BY price ASC";
											}elseif ($_GET['price']=="desc") {
												$odrer_query.=" ORDER BY price DESC";
											}
											if($_GET['count'])
											{
												$odrer_query.=" LIMIT ".$_GET['count'].",".($_GET['count']+20);
											}
											echo '<script>document.title="'.$title.'";</script>';
												$link=mysqli_connect('127.0.0.1','solarstu_yan','zev1982z','solarstu_meow');
												mysqli_set_charset($link, "utf8");
												if(!$link) echo mysqli_connect_error();
											$howmuch=0;
											//echo $odrer_query;
											if($result = mysqli_query($link,"SELECT * FROM Product".$odrer_query))
															{$count=1;
																while($row = mysqli_fetch_assoc($result))
																{
																	$tovar->construct($row['product_name'],$row['src'],$row['price'],$row['id'],$row['manufact_id'],$row['pet_type_id'],$row['comment_text']);
																	if($count%$n==0)
																	{
																		//echo "<br>";
																	}

																	$count++;
																}
															}
											if($result1 = mysqli_query($link,"SELECT COUNT(*) as howmuch FROM Product".$odrer_query))
															{
																while($row1 = mysqli_fetch_assoc($result1))
																{
																	$howmuch=$row1['howmuch'];
																}
															}
											if(!$howmuch)
												{
													echo "<br/>";
													echo '<div id="header"><div id="not_found" align="center">По Вашему запросу ничего не найдено.</div></div>';
												}
											if($howmuch>1){
												echo'<nav>
													  <ul class="pagination" align="center">
														<li>
														  <a href=href="?price='.$_GET['price'].'&age='.$_GET['age'].'&search='.$_GET['search'].'&type='.$_GET['type'].'&size='.$_GET['size'].'&product='.$_GET['product'].'&count='.($_GET['count']-20).'" aria-label="Previous">
															<span aria-hidden="true">&laquo;</span>
														  </a>
														</li>
														  ';
														  for($i=1;$i<=1+$howmuch/20;$i++)
														  {
															echo'<li><a href="?price='.$_GET['price'].'&age='.$_GET['age'].'&search='.$_GET['search'].'&type='.$_GET['type'].'&size='.$_GET['size'].'&product='.$_GET['product'].'&count='.(20*$i).'">'.$i.'</a></li>';													  
														  }
														  echo'
														<li>
														  <a href="?price='.$_GET['price'].'&age='.$_GET['age'].'&search='.$_GET['search'].'&type='.$_GET['type'].'&size='.$_GET['size'].'&product='.$_GET['product'].'&count='.($_GET['count']+20).'" aria-label="Next">
															<span aria-hidden="true">&raquo;</span>
														  </a>
														</li>
													  </ul>
													</nav>';
											}
							if(isset($_POST['send']))
							{
						$json=$_POST['orders_info'];
						$array=json_decode($json);
						foreach($array as $item)
							{
								$id.=$item->num."x".$item->id.";";
							}
						$id = substr($id, 0, strlen($id)-1);
								$delivery_id=0;
								$sql="INSERT INTO `Orders` (order_str,client_name,client_email,client_phone,client_adress,delivery_id,date,time) VALUES('".$id."','".$_POST['fio']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['city']."',".$delivery_id.",NOW(),NOW())";
								//echo $sql;
								mysqli_query($link,$sql);
								echo '<script>	
									  localStorage.clear();
									  </script>';
									  echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=index.php">';
							}
					?>
				</div>
			</div>
</div>
</body>
</html>