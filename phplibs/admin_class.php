<?php

class popUpWindow{
	public function __construct(){
		
//
		include("phplibs/con_db.php");
		mysqli_set_charset($link, "utf8");
		$pet_size_array=mysqli_query($link,"SELECT * FROM `Pets_size`");
		$product_type_array=mysqli_query($link,"SELECT * FROM `Product_type`");
		$manufact_array=mysqli_query($link,"SELECT * FROM `Manufactures`");
		$pet_type_array=mysqli_query($link,"SELECT * FROM `Pets_type`");
		$pet_age_array=mysqli_query($link,"SELECT * FROM `Pets_age`");
		$product_type='<select id=\'product_type\' name=\'product_type\' class=\'form-control\'>';
		$pets_size='<select id=\'pets_size\' name=\'pets_size\' class=\'form-control\'>';
		$manufact='<select id=\'manufact\' name=\'manufact\' class=\'form-control\'>';
		$pet_type='<select id=\'pet_type\' name=\'pet_type\' class=\'form-control\'>';
		$pet_age='<select id=\'pet_age\' name=\'pet_age\' class=\'form-control\'>';
		while($row=mysqli_fetch_assoc($product_type_array)){
			$product_type.='<option value=\''.$row['id'].'\'>'.$row['name'].'</option>';
		}
		$product_type.='</select>';

		while($row=mysqli_fetch_assoc($pet_size_array)){
				$pets_size.='<option value=\''.$row['id'].'\'>'.$row['val'].'</option>';
		}
		$pets_size.='</select>';

		while($row=mysqli_fetch_assoc($manufact_array)){
				$manufact.='<option value=\''.$row['id'].'\'>'.$row['name'].'</option>';
		}
		$manufact.='</select>';

		while($row=mysqli_fetch_assoc($pet_type_array)){
				$pet_type.='<option value=\''.$row['id'].'\'>'.$row['type_name'].'</option>';
		}
		$pet_type.='</select>';

		while($row=mysqli_fetch_assoc($pet_age_array)){
				$pet_age.='<option value=\''.$row['id'].'\'>'.$row['age_name'].'</option>';
		}
		$pet_age.='</select>';
//
		echo'<link rel="stylesheet" type="text/css" href="css/item.css">';
		echo'<div id="azaz1" class="azaz1" style="display:none;"></div>';
		echo'<script>
		function showModal(idtovar,name,url,price,manufact,pet_type_id,description)
{
	document.getElementById(`azaz1`).style.display="block";
	this.IMG = "iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABpFBMVEUAAABEREBEREBEREBEREASEhEJCQgGBgYBAQEAAAAGBgUHBwYAAAAAAAADAwNEREBEREAJCQkICAcGBgYFBQUJCQgnJyVEREAICAgBAQEAAAAICAcAAAAAAAAAAAAJCQgAAAAGBgYBAQEQEA8NDQwHBwcBAQEMDAsSEhEJCQkBAQEBAQEBAQFAQDxEREBEREADAwIAAAABAQESEhEkJCIAAAAICAgAAAAQEA9EREAAAAATExIAAAAKCgkNDQwAAAAAAAABAQETExIHBwcDAwMDAwMTExIAAAAAAAABAQEAAAAAAAAAAAAAAAAAAAAAAAADAwIAAAAGBgUBAQEWFhUAAAAAAAAHBwYBAQEVFRMDAwMHBwcUFBMWFhUBAQETExIAAAAAAAADAwMMDAsAAAAAAAASEhEAAAAUFBMAAAAJCQkrKygDAwMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAwMAAAAJCQgAAAAiIiABAQEAAAAAAAAAAAAAAAAAAAAAAAAAAAABAQFEREAFBQUBAQEAAAAGBgYICAgHBwcBAQEJW8x2AAAAhXRSTlMAAQcIAjJ0kZqZnp+LaygNDxKw/v6wIwPY1A+upf4nenGWvXCg/Pubc8eSmLkcHxpW+vlhBr6hl3EDUl9pop5Q+fhe+1FPXVT8mlxfXWD9+1dbnPRRRved9ldI+Fhd+mBaVlSYWJN1V2dqwwVTA8ORvJXAknRzKii2rCjc3BUTqagrepgUbRZwswAAAAlwSFlzAAAASAAAAEgARslrPgAAAb1JREFUOMuNk2dTwkAQhpdiCZagotiwd5RYQeyKJdii2FDsvffeG0TJnza3lzg4kBnv0zt5NpvdZ3IA/zs6vUGv00wAxrj4hESGnERTkomk5JRU1swaFZ6WnhEMieSEgl9qsmRmWVWe/R2W8KkUjkw5uUr/vNhcEvPpLHEZGly0FYA8pb4wqMFFscioBzAU06lKSsvKKa+orKqmqYY1yB3smGvrHFx9A0mNTQ6uuQU7Oc1yB50Lc6uDc0ObXNHYTlIHfqmTJaZcmLvkpwDdPb19hAODkzjRlAuzpx93GhhEPsTjpF6gBTg1PyxnN4d8hHKJoQUhuhU/qvKxcWVTWmAPKlsLE5RP8qoJLND5vhQ/U9PIYWZWNcWgyTnFpH+ecoCFgNKTQZM+atK/qHI3txSg73gjTC6vIF9dw0nXhSiTG8g3eaEeJ92KMrlN+I4gSp5dkvaiTO4fAKwJ6PQQ4Og4wuQJ3fp070zZXzhJOafpAgsuQ2Gtf+4KC64tWtx2gybZW61/8g7QpPn+ITZ/fAI0yVqfX2wx+r8+gxVNkl3f3j+cnU4v3j4vSa73NwDrJ5qkt+f3Jv5N6u3Vvt0/UGcpYbC85ecAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTMtMDUtMThUMDY6MDM6MzEtMDU6MDALk1CfAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDEzLTA1LTE4VDA2OjAzOjMxLTA1OjAwes7oIwAAAABJRU5ErkJggg==";
document.getElementById(`azaz1`).innerHTML="<form method=\'POST\' action=\'\' enctype=\'multipart/form-data\'><div id=\'bcontainer_item\' class=\'bcontainer_item_admin\'> <a id=\'bclose_item\' href=\'#\' onclick=\'document.getElementById(\"azaz1\").style.display=\"none\";\'><img src=\'data:image/jpeg;base64,"+ this.IMG + "\' /></a><div id=\'bsubject_item\'>"+"<div id=\'info_item\'><img style=\'width:50%;position:relative;left:25%;\' src=\'content/"+url+"\'/><div id=\'update_photo_item \'>Фотография:<input type=\'file\' name=\'uploadfile\'/></div><div id=\'item_name\'>Наименование:<input type=\'text\' name=\'item_name\' class=\'form-control\' value=\'"+name+"\' style=\'width:100%\'></div><div id=\'item_price\'>Цена: <input type=\'text\' name=\'item_price\' class=\'form-control\' value=\'"+price+"\'></div><div id=\'product_type \'>Тип товара:'.$product_type.'</div><div id=\'pet_age \'>Возраст/положение:'.$pet_age.'</div><div id=\'pet_type\'>Животное:'.$pet_type.'</div><div id=\'manufact\'>Производитель:'.$manufact.'</div><div id=\'pets_size\'>Размер животного'.$pets_size.'</div><div id=\'details_item\' >Описание:<br/><textarea class=\'form-control\' name=\'description\'>"+description+"</textarea></div><div id=\'item_buy><div id=\'detailslink\' align=\'left\'><br/><input type=\'submit\' value=\'Подтвердить\' class=\'button more_width\' name=\'change_item\'><input name=\'id\' value=\'"+idtovar+"\' hidden/><br/></div></div></div></form>"
+"</div></div>";
}
</script>';
		echo'<script>
					function showInfoBox(id,client_name,client_email,client_phone,client_adress,date,time,comment,show_order)
			{

				this.IMG = "iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABpFBMVEUAAABEREBEREBEREBEREASEhEJCQgGBgYBAQEAAAAGBgUHBwYAAAAAAAADAwNEREBEREAJCQkICAcGBgYFBQUJCQgnJyVEREAICAgBAQEAAAAICAcAAAAAAAAAAAAJCQgAAAAGBgYBAQEQEA8NDQwHBwcBAQEMDAsSEhEJCQkBAQEBAQEBAQFAQDxEREBEREADAwIAAAABAQESEhEkJCIAAAAICAgAAAAQEA9EREAAAAATExIAAAAKCgkNDQwAAAAAAAABAQETExIHBwcDAwMDAwMTExIAAAAAAAABAQEAAAAAAAAAAAAAAAAAAAAAAAADAwIAAAAGBgUBAQEWFhUAAAAAAAAHBwYBAQEVFRMDAwMHBwcUFBMWFhUBAQETExIAAAAAAAADAwMMDAsAAAAAAAASEhEAAAAUFBMAAAAJCQkrKygDAwMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAwMAAAAJCQgAAAAiIiABAQEAAAAAAAAAAAAAAAAAAAAAAAAAAAABAQFEREAFBQUBAQEAAAAGBgYICAgHBwcBAQEJW8x2AAAAhXRSTlMAAQcIAjJ0kZqZnp+LaygNDxKw/v6wIwPY1A+upf4nenGWvXCg/Pubc8eSmLkcHxpW+vlhBr6hl3EDUl9pop5Q+fhe+1FPXVT8mlxfXWD9+1dbnPRRRved9ldI+Fhd+mBaVlSYWJN1V2dqwwVTA8ORvJXAknRzKii2rCjc3BUTqagrepgUbRZwswAAAAlwSFlzAAAASAAAAEgARslrPgAAAb1JREFUOMuNk2dTwkAQhpdiCZagotiwd5RYQeyKJdii2FDsvffeG0TJnza3lzg4kBnv0zt5NpvdZ3IA/zs6vUGv00wAxrj4hESGnERTkomk5JRU1swaFZ6WnhEMieSEgl9qsmRmWVWe/R2W8KkUjkw5uUr/vNhcEvPpLHEZGly0FYA8pb4wqMFFscioBzAU06lKSsvKKa+orKqmqYY1yB3smGvrHFx9A0mNTQ6uuQU7Oc1yB50Lc6uDc0ObXNHYTlIHfqmTJaZcmLvkpwDdPb19hAODkzjRlAuzpx93GhhEPsTjpF6gBTg1PyxnN4d8hHKJoQUhuhU/qvKxcWVTWmAPKlsLE5RP8qoJLND5vhQ/U9PIYWZWNcWgyTnFpH+ecoCFgNKTQZM+atK/qHI3txSg73gjTC6vIF9dw0nXhSiTG8g3eaEeJ92KMrlN+I4gSp5dkvaiTO4fAKwJ6PQQ4Og4wuQJ3fp070zZXzhJOafpAgsuQ2Gtf+4KC64tWtx2gybZW61/8g7QpPn+ITZ/fAI0yVqfX2wx+r8+gxVNkl3f3j+cnU4v3j4vSa73NwDrJ5qkt+f3Jv5N6u3Vvt0/UGcpYbC85ecAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTMtMDUtMThUMDY6MDM6MzEtMDU6MDALk1CfAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDEzLTA1LTE4VDA2OjAzOjMxLTA1OjAwes7oIwAAAABJRU5ErkJggg==";
			document.getElementById(`azaz1`).innerHTML="<div id=\'bcontainer_item\' class=\'bcontainer_item_admin\'> <a id=\'bclose_item\' href=\'#\' onclick=\'document.getElementById(\"azaz1\").style.display=\"none\";\'><img src=\'data:image/jpeg;base64,"+ this.IMG + "\' /></a><div id=\'info_item\'><input type=\'text\' value=\'"+client_name+"\'class=\'form-control\' readonly/><input type=\'text\' value=\'"+client_email+"\'class=\'form-control\' readonly/><input type=\'text\' value=\'"+client_phone+"\'class=\'form-control\' readonly/><input type=\'text\' value=\'"+client_adress+"\'class=\'form-control\' readonly/><input type=\'text\' value=\'"+date+"\' class=\'form-control\' readonly/><input type=\'text\' value=\'"+time+"\'class=\'form-control\' readonly/>"+show_order+"</div>";
			document.getElementById(`azaz1`).style.display="block";
			}
			</script>';

		if(isset($_POST['change_item']))
		{
			$this->catchPost($link,$_POST['id'],$_POST['item_name'],$_POST['description'],$_POST['pet_age'],$_POST['manufact'],$_POST['product_type'],$_POST['pets_size'],$_POST['item_price'],$_POST['pet_type']);
		if(!$result=$this->load($link,$_POST['id']))
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=/admin.php?cat=product">';
		}
	}
	function catchPost($link,$id,$name,$description,$pet_age,$manufact,$product_type,$pet_size,$price,$pet_type)
	{
		if($_FILES["uploadfile"]['name'])$image=$_FILES["uploadfile"]['name'];
		else $image="logo.png";
		if($id) $sql="UPDATE Product SET product_name='".$name."',product_type_id=".$product_type.",manufact_id=".$manufact.",pet_size_id=".$pet_size.",pet_type_id=".$pet_type.",pet_age_id=".$pet_age.",price=".$price.",comment_text='".$description."' WHERE id=".$id;
		else $sql="INSERT INTO Product (product_name,product_type_id,pet_size_id,manufact_id,pet_type_id,pet_age_id,price,comment_text,src) VALUES ('".$name."','".$product_type."','".$pet_size."',".$manufact.",".$pet_type.",".$pet_age.",".$price.",'".$description."','".$image."')";
		mysqli_query($link,$sql);
	}
		function load($link,$id)
	{
								$uploaddir = './content/';
							$uploadfile = $uploaddir.basename($_FILES["uploadfile"]['name']);
							if (move_uploaded_file($_FILES["uploadfile"]['tmp_name'], $uploadfile))
							{
						$query="UPDATE Product SET src='".$_FILES["uploadfile"]['name']."' WHERE id=".$id;
						//echo $query;
								mysqli_query($link,$query);
							}
							else 
							{
								$query="UPDATE Product SET src='".$_FILES["uploadfile"]['name']."' WHERE id=".$id;
								mysqli_query($link,$query);
							}
	}
	

	public function popUpProductCreator(){
		include("phplibs/con_db.php");
		mysqli_set_charset($link, "utf8");
		$pet_size_array=mysqli_query($link,"SELECT * FROM `Pets_size`");
		$product_type_array=mysqli_query($link,"SELECT * FROM `Product_type`");
		$manufact_array=mysqli_query($link,"SELECT * FROM `Manufactures`");
		$pet_type_array=mysqli_query($link,"SELECT * FROM `Pets_type`");
		$pet_age_array=mysqli_query($link,"SELECT * FROM `Pets_age`");
		$product_type='<select id="product_type" name="product_type" class="form-control">';
		$pets_size='<select id="pets_size" name="pets_size" class="form-control">';
		$manufact='<select id="manufact" name="manufact" class="form-control">';
		$pet_type='<select id="pet_type" name="pet_type" class="form-control">';
		$pet_age='<select id="pet_age" name="pet_age" class="form-control">';
		while($row=mysqli_fetch_assoc($product_type_array)){
			$product_type.='<option value="'.$row['id'].'">'.$row['name'].'</option>';
		}
		$product_type.='</select>';

		while($row=mysqli_fetch_assoc($pet_size_array)){
				$pets_size.='<option value="'.$row['id'].'">'.$row['val'].'</option>';
		}
		$pets_size.='</select>';

		while($row=mysqli_fetch_assoc($manufact_array)){
				$manufact.='<option value="'.$row['id'].'">'.$row['name'].'</option>';
		}
		$manufact.='</select>';

		while($row=mysqli_fetch_assoc($pet_type_array)){
				$pet_type.='<option value="'.$row['id'].'">'.$row['type_name'].'</option>';
		}
		$pet_type.='</select>';

		while($row=mysqli_fetch_assoc($pet_age_array)){
				$pet_age.='<option value="'.$row['id'].'">'.$row['age_name'].'</option>';
		}
		$pet_age.='</select>';
		$res= '<script>
			function showPopup(productName,productType)
			{
				document.getElementById(\'azaz1\').innerHTML=\'<div class="modal" id="myModal">\
  <div class="modal-header">\
    <button class="close" data-dismiss="modal">×</button>\
    <h3>Заголовок</h3>\
  </div>\
  <div class="modal-body">\
    <p>Текст…</p>\
  </div>\
  <div class="modal-footer">\
    <a href="#" class="btn">Закрыть</a>\
    <a href="#" class="btn btn-primary">Сохранить</a>\
  </div>\
</div>\';}
			</script>';

			echo $res;
	}

}

class Admin{

	public function __construct(){
		session_start();
		if(isset($_GET['action'])&$_GET['action']=="logout"){
			unset($_SESSION['log']);
			header( 'Location: http://'.$_SERVER['SERVER_NAME'], true, 301 );
		}
		if(isset($_POST['login'])){
			$this->checkToLogin();
		}
		if(!isset($_SESSION['log'])){
			$this->login();
		}else{
			$this->editEvents();
			$this->head();
			$this->adminMenu();
			$this->adminPanel();
		}
	}



	
	private function checkToLogin(){
		include("phplibs/con_db.php");
		$login=$_POST['login'];
		$pass=md5($_POST['pass']);
		$sql="SELECT * FROM user WHERE login='".$login."'";
		$result = mysqli_query($link,$sql);
		if($result){
			$userdata=mysqli_fetch_assoc($result);
			if($userdata['pass']!=$pass){
				echo 'invalid account. Please, try again';
				$this->login();
			}else{
				$_SESSION['log']=$userdata['id'];
				return;
			}
		}
	}

	private function head(){
		include_once('phplibs/head.php');
	}

	private function login(){
		include_once('phplibs/login.php');
	}

	private function adminPanel(){
		include('phplibs/slider.php');

		echo '<div class="panel">
				<div id=\'azaz1\'></div>
				<div id="content">';
				if($_GET['cat']=='orders'||!isset($_GET['cat'])){
					$this->ordersMenu();
				}elseif($_GET['cat']=='product'){
					$this->productEditor();
				}elseif($_GET['cat']=='slider'){
					
					$slider=new SliderSettings();
				}
		echo "</div></div>";
	}

	private function ordersMenu(){
		include("phplibs/con_db.php");
					$window = new popUpWindow();
		$sql="SELECT * FROM Orders ORDER BY `date`,`time` DESC";
		mysqli_set_charset($link, "utf8");
		$menu=mysqli_query($link,$sql);
		$this->tableHeaderGenerator(array('Имя клиента','Email','Заказ','Номер телефона','Адрес','Способ доставки','Дата','Время','Статус','Примечание','Действие'));
		while($row=mysqli_fetch_assoc($menu)){
			$ordrs=split(';',$row['order_str']);
			$ord="";
			$deliv='<select name="delivery">';
			$delivery_methods=mysqli_query($link,"SELECT `id`, `method` FROM `Delivery_method`");
			while($option=mysqli_fetch_assoc($delivery_methods)){
				if($option['id']==$row['delivery_id']){
					$deliv.='<option selected value="'.$option['id'].'">'.$option['method'].'</option>';
				}else{
					$deliv.='<option value="'.$option['id'].'">'.$option['method'].'</option>';
				}
			}
			$deliv.="</select>";
			$status='<select name="status">';
			$status_methods=mysqli_query($link,"SELECT `id`, `val` FROM `status`");
			while($option=mysqli_fetch_assoc($status_methods)){
				if($option['id']==$row['status_id']){
					$status.='<option selected value="'.$option['id'].'">'.$option['val'].'</option>';
				}else{
					$status.='<option value="'.$option['id'].'">'.$option['val'].'</option>';
				}
			}
			$status.="</select>";
			foreach ($ordrs as $k) {
				$buf=split('x',$k);
				$ord.=$this->orderFormat($buf[1],$buf[0]);
			}
			echo '<tr><form class="form-inline row-editor" name="editform"  method="post" action="">
			<input type="text" class="input-small" name="id" value="'.$row['id'].'" hidden>
			<td><input type="text" class="input-small" name="name" value="'.$row['client_name'].'" readonly></td>
			<td><input type="text" class="input-small" name="email" value="'.$row['client_email'].'"></td>
			<td><div class="bs-example">
    		<div class="list-group">'.$ord.'</div></div></td>
			<td><input type="text" class="input-small" name="phone" value="'.$row['client_phone'].'"></td>
			<td><input type="text" class="input-small" name="adres" value="'.$row['client_adress'].'"></td>
			<td>'.$deliv.'</td>
			<td><input type="text" class="input-small" name="date" value="'.$row['date'].'" readonly></td>
			<td><input type="text" class="input-small" name="time" value="'.$row['time'].'" readonly></td>
			<td>'.$status.'</td>
			<td> <textarea class="form-control" rows="5" name="comment" >'.$row['comment'].'</textarea></td>
			<td><button class="btn_border" type="button" onClick="showInfoBox('.$row['id'].',`'.$row['client_name'].'`,`'.$row['client_email'].'`,`'.$row['client_phone'].'`,`'.$row['client_adress'].'`,`'.$row['date'].'`,`'.$row['time'].'`,`'.$row['comment'].'`,`'.$row['order_str'].'`);" name="save_order" value="show"><span class="glyphicon glyphicon-eye-open"></span></button>
			<button class="btn_border" type="submit" name="save_order" value="save"><span class="glyphicon glyphicon-ok"></span></button>
			<button class="btn_border" type="submit" name="delete_order" value="delete"><span class="glyphicon glyphicon-remove"></span></button></td>
		</form></tr>';
		}
		echo '</table></div>';
	}
	private function orderFormat($id,$count){
		include("phplibs/con_db.php");
		$sql="SELECT * FROM Product WHERE `id`=".$id;
		mysqli_set_charset($link, "utf8");
		$menu=mysqli_query($link,$sql);
		$row=mysqli_fetch_assoc($menu);
		if(!$menu){
			return;
		}
		return ' <a class="list-group-item">'.$row['product_name'].' <span class="badge admin_circle">'.$count.'</span></a>';

	}

	private function adminMenu(){
		include_once('phplibs/adminMenu.php');
	}

	private function editEvents(){
		include("phplibs/con_db.php");
		mysqli_set_charset($link, "utf8");
		if(isset($_POST['delete_order'])){
			mysqli_query($link,"DELETE FROM Orders WHERE id=".$_POST['id']);
		}
		if(isset($_POST['save_order'])){
			mysqli_query($link,'UPDATE Orders SET client_email="'.$_POST["email"].'",client_phone="'.$_POST['phone'].'",client_adress="'.$_POST['adres'].'",delivery_id='.$_POST['delivery'].',status_id='.$_POST['status'].',comment="'.$_POST['comment'].'" WHERE id='.$_POST['id']);
		}
		if(isset($_POST['save_product'])){
			mysqli_query($link,'INSERT INTO ');
		}
		if(isset($_POST['delete_product'])){
			mysqli_query($link,'DELETE FROM Product WHERE id='.$_POST['id']);
		}
	}

	private function productEditor($index=0){
		include("phplibs/con_db.php");
		mysqli_set_charset($link, "utf8");
		$this->tableHeaderGenerator(array('Название','Тип','Производитель','Вид питомца','Возраст','Размер питомца','Цена','Количество на складе','Описание','Лого','Действие'));
		$product=mysqli_query($link,"SELECT * FROM `Product`");
		$this->AddButton();
		$this->AddManufactor();
		$popup=new popUpWindow();
		$popup->popUpProductCreator();
		while($row=mysqli_fetch_assoc($product)){
			$fetchDataArray=array(mysqli_fetch_assoc(mysqli_query($link,"SELECT * FROM `Product_type` WHERE `id`=".$row['product_type_id']))['name'],
				mysqli_fetch_assoc(mysqli_query($link,"SELECT * FROM `Manufactures` WHERE `id`=".$row['manufact_id']))['name'],
				mysqli_fetch_assoc(mysqli_query($link,"SELECT * FROM `Pets_type` WHERE `id`=".$row['pet_type_id']))['type_name'],
				mysqli_fetch_assoc(mysqli_query($link,"SELECT * FROM `Pets_age` WHERE `id`=".$row['pet_age_id']))['age_name'],
				mysqli_fetch_assoc(mysqli_query($link,"SELECT * FROM `Pets_size` WHERE `id`=".$row['pet_size_id']))['val'],
				$row['price'],
				$row['product_count']);
			$tableRow= '<tr><form class="form-inline row-editor" name="editform"  method="post" action="">
			<input type="text" class="input-small" name="id" value="'.$row['id'].'" hidden>
			<td><input type="text" class="input-small" name="name" value=\''.$row['product_name'].'\' readonly></td>';
			foreach ($fetchDataArray as $fda) {
				$tableRow.='<td><input type="text" class="input-small" value="'.$fda.'" readonly></td>';
			}
			$m_id=$row['id'];
			$m_name=$row['product_name'];
			$m_src=$row['src'];
			$m_price=$row['price'];
			$m_manufact=$row['manufact_id'];
			$m_pet=$row['pet_type_id'];
			$m_descr=$row['comment_text'];
			$tableRow.="<td> <textarea class='form-control' rows='5' name='comment' >".$row['comment_text']."</textarea></td>
			<td><img src='content/".$row['src']."' width='64' height='64'></td>
			<td>
			<button type='button' class='btn_border' onclick='showModal(".$m_id.",`".$m_name."`,`".$m_src."`,".$m_price.",".$m_manufact.",".$m_pet.",`".$m_descr."`);' data-toggle='modal' href='#myModal'><span class='glyphicon glyphicon-pencil'></span></button>
			<button class='btn_border' type='submit' name='delete_product' value='delete'><span class='glyphicon glyphicon-remove'></span></button></td>
		</form></tr>";
		echo $tableRow;
		
		}
		echo '</table></div>';

	}
		private function AddButton()
	{
		echo'<div id="addbutton">';
		echo '<button class="addbutton" type="submit" onClick="showModal(0,`Новый товар`,`logo.png`,10,1,1,`Новый товар`);"  name="upload"><span class="glyphicon glyphicon-plus"></span> Добавить товар</button>';
		echo'</div>';
	}
		private function AddManufactor()
	{
		include("phplibs/con_db.php");
		mysqli_set_charset($link, "utf8");
		echo'<div id="addbutton">';
		echo '<button class="addbutton" type="submit" onClick="addManufactor();"  name="upload"><span class="glyphicon glyphicon-plus"></span> Добавить производителя</button>';
		echo'</div>';
		echo'
		<script>
		var a=1;var b=1;
		function addManufactor()
		{
							this.IMG = "iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABpFBMVEUAAABEREBEREBEREBEREASEhEJCQgGBgYBAQEAAAAGBgUHBwYAAAAAAAADAwNEREBEREAJCQkICAcGBgYFBQUJCQgnJyVEREAICAgBAQEAAAAICAcAAAAAAAAAAAAJCQgAAAAGBgYBAQEQEA8NDQwHBwcBAQEMDAsSEhEJCQkBAQEBAQEBAQFAQDxEREBEREADAwIAAAABAQESEhEkJCIAAAAICAgAAAAQEA9EREAAAAATExIAAAAKCgkNDQwAAAAAAAABAQETExIHBwcDAwMDAwMTExIAAAAAAAABAQEAAAAAAAAAAAAAAAAAAAAAAAADAwIAAAAGBgUBAQEWFhUAAAAAAAAHBwYBAQEVFRMDAwMHBwcUFBMWFhUBAQETExIAAAAAAAADAwMMDAsAAAAAAAASEhEAAAAUFBMAAAAJCQkrKygDAwMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAwMAAAAJCQgAAAAiIiABAQEAAAAAAAAAAAAAAAAAAAAAAAAAAAABAQFEREAFBQUBAQEAAAAGBgYICAgHBwcBAQEJW8x2AAAAhXRSTlMAAQcIAjJ0kZqZnp+LaygNDxKw/v6wIwPY1A+upf4nenGWvXCg/Pubc8eSmLkcHxpW+vlhBr6hl3EDUl9pop5Q+fhe+1FPXVT8mlxfXWD9+1dbnPRRRved9ldI+Fhd+mBaVlSYWJN1V2dqwwVTA8ORvJXAknRzKii2rCjc3BUTqagrepgUbRZwswAAAAlwSFlzAAAASAAAAEgARslrPgAAAb1JREFUOMuNk2dTwkAQhpdiCZagotiwd5RYQeyKJdii2FDsvffeG0TJnza3lzg4kBnv0zt5NpvdZ3IA/zs6vUGv00wAxrj4hESGnERTkomk5JRU1swaFZ6WnhEMieSEgl9qsmRmWVWe/R2W8KkUjkw5uUr/vNhcEvPpLHEZGly0FYA8pb4wqMFFscioBzAU06lKSsvKKa+orKqmqYY1yB3smGvrHFx9A0mNTQ6uuQU7Oc1yB50Lc6uDc0ObXNHYTlIHfqmTJaZcmLvkpwDdPb19hAODkzjRlAuzpx93GhhEPsTjpF6gBTg1PyxnN4d8hHKJoQUhuhU/qvKxcWVTWmAPKlsLE5RP8qoJLND5vhQ/U9PIYWZWNcWgyTnFpH+ecoCFgNKTQZM+atK/qHI3txSg73gjTC6vIF9dw0nXhSiTG8g3eaEeJ92KMrlN+I4gSp5dkvaiTO4fAKwJ6PQQ4Og4wuQJ3fp070zZXzhJOafpAgsuQ2Gtf+4KC64tWtx2gybZW61/8g7QpPn+ITZ/fAI0yVqfX2wx+r8+gxVNkl3f3j+cnU4v3j4vSa73NwDrJ5qkt+f3Jv5N6u3Vvt0/UGcpYbC85ecAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTMtMDUtMThUMDY6MDM6MzEtMDU6MDALk1CfAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDEzLTA1LTE4VDA2OjAzOjMxLTA1OjAwes7oIwAAAABJRU5ErkJggg==";
			document.getElementById(`azaz1`).innerHTML="<div id=\'bcontainer_item\' class=\'bcontainer_item_admin\'> <a id=\'bclose_item\' href=\'#\' onclick=\'document.getElementById(\"azaz1\").style.display=\"none\";\'><img src=\'data:image/jpeg;base64,"+ this.IMG + "\' /></a><div id=\'info_item\'><form method=\"POST\" ><input type=\"text\" name=\"manufactor\" class=\'form-control\' value=\'Производитель\' onClick=\"if(a){$(this).val(``);a=0;}\"/><br/><input type=\"text\" value=\'Страна\' name=\"country\" class=\'form-control\' onClick=\"if(b){$(this).val(``);b=0;}\"/><br/><input type=\"submit\" name=\"add_manufactor\" class=\'form-control\' value=\"Добавить\"/></form></div></div>";
			document.getElementById(`azaz1`).style.display="block";
		}
		</script>';
		if(isset($_POST['add_manufactor']))
		{
			if($_POST['manufactor']!='Производитель'&&$_POST['country']!='Страна')
			{
				
			//$sql='begin tran if exists (select * from Manufactures where name = "'.$_POST['manufactor'].'" AND country="'.$_POST['country'].'")begin SELECT NOW()  end else begin  insert INTO Manufactures (name,country)   values ("'.$_POST['manufactor'].'", "'.$_POST['country'].'") end commit tran';
			$sql='insert INTO Manufactures (name,country)   values ("'.$_POST['manufactor'].'", "'.$_POST['country'].'");';
			//echo $sql;
			mysqli_query($link,$sql);
			
			}
		}
	}

	private function tableHeaderGenerator($categories){
		echo '<div class="container1"><table class="table table-striped admin_table"><thead><tr>';
		foreach ($categories as $cat) {
			echo '<td>'.$cat.'</td>';
		}
		echo '</tr></thead>';
	}

}
?>