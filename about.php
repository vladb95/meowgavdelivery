<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>О нас</title>
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
	<style>
		.content_about{
			top:60px;
		}
		#content{
			padding-bottom: 30px;
			height: 60%;
		}
		#logomg{
			 text-align: center;
 			 vertical-align: middle;
		}
	</style>
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
document.getElementById('azaz1').innerHTML="<div id='bcontainer_item' class='bcontainer_item'> <a id='bclose_item' href='#' onclick='document.getElementById(\"azaz1\").style.display=\"none\";'><img src='data:image/jpeg;base64,"+ this.IMG + "' /></a><div id='bsubject_item'>"+"<div id='photo'><img style='width:250px;' src='content/"+url+"'/></div><div id='info'><div id='item_name'>"+name+"</div><div id='item_price'>Цена: <b style='color:red;'>"+price+"</b> грн.</div><div id='item_buy><div id='detailslink' align='left'><br/><button class='button more_width' onclick='cart.addToCart(this, `"+idtovar+"`, `"+name+"`, `"+price+"`)'>Добавить в корзину</button><br/></div><div id='details'>Описание:"+description+"</div></div></div>"
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
				<a href="http://<?=$_SERVER['SERVER_NAME']?>/?type=dog">
					<div>
						Собаки
						<span class="span">товары для собак</span>
					</div>
				</a><div>
					<ul>
						<li><a href="http://<?=$_SERVER['SERVER_NAME']?>/?type=dog&product=corms">Сухие корма</a></li>
						<li><a href="http://<?=$_SERVER['SERVER_NAME']?>/?type=dog&product=conserv">Консервы</a></li>
						<li><a href="http://<?=$_SERVER['SERVER_NAME']?>/?type=dog&product=accessories">Аксессуары</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="http://<?=$_SERVER['SERVER_NAME']?>/?type=cat">
					<div>
						Кошки
						<span class="span">товары для кошек</span>
					</div>
				</a><div>
					<ul>
						<li><a href="http://<?=$_SERVER['SERVER_NAME']?>/?type=cat&product=corms">Сухие корма</a></li>
						<li><a href="http://<?=$_SERVER['SERVER_NAME']?>/?type=cat&product=conserv">Консервы</a></li>
						<li><a href="http://<?=$_SERVER['SERVER_NAME']?>/?type=cat&product=accessories">Аксессуары</a></li>
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
					<a href="#" id="basketwidjet" onclick="cart.showWinow('bcontainer', 1)">Товаров 0 на сумму 0</a> <span style="font: normal 11px Arial"></span>
				</div>
		</nav>
	</header>
<div id="wrapper-holder">
		<div id="wrapper">
			<a href="#carousel-example" class="carousel-control left" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a href="#carousel-example" class="carousel-control right" data-slide="next">
				<span class="icon-next"></span>
			</a>
		</div>
			</div>
			<!--End of adblock-->
			<div class="content_about content_block">
				<div id="content">
				<p style="color:#00CED1;font-size:xx-large;  text-align: center;padding-top:5px;">О нас</p>
				<div id="logomg"><img width="320" height="320" src="content/logo.png" style="padding-bottom:10px;"></div>
					<div style="padding-left:23px;padding-right:25px;">
						
						<span><p>
							Уважаемый посетитель магазина, команда MeowGav искренне приветствует тебя и хочет немного рассказать о себе. 
Сейчас Ты находишься на странице сервиса по доставке кормов и аксессуаров для домашних любимцев, кошек и собак. Здесь представленна линейка товаров только премиум, супер-премиум и холистик классов, так как MG глубоко убеждены, здоровье и активность  наших младших друзей не должны ни в коем случае страдать, включая и от некачественного питания и средств по уходу.
Приоритетом нашей работы является наиболее качественное обслуживание клиентов и их  маленьких и не очень маленьких любимцев, поэтому выполняя свою работу, Мы руководствуемся следующими принципами:
						</p></span>	
						<ul style="padding-left:25px;">
							<li>Мы в ответственности за качество товара, качество- это наша основа.</li>
							<li>Скорость и пунктуальность доставки- наше преимущество.</li>
							<li>Улыбка на лице и работа от души- наше приятное дополнение</li>
						</ul>	
						<span>Гарантируем полную самоотдачу и глубоко надеемся, что сервис MeowGav оставит лишь позитивные впечатления от обслуживания.</span>
						<h3 align="right">С уважением, команда MG</h3>
						</div>
				</div>
			</div>
</div>
</body>
</html>