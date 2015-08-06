<?PHP
include_once("settings.php");
class Upload
{
	function load($price,$name)
		{
			$uploaddir = './files/';
			$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

			if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
			{
			echo "<h3>Ôàéë óñïåøíî çàãðóæåí íà ñåðâåð</h3>";
			}
			else { echo "<h3>Îøèáêà! Íå óäàëîñü çàãðóçèòü ôàéë íà ñåðâåð!</h3>"; exit; }
			$link=mysqli_connect('mysql.hostinger.com.ua','u522145326_yan','zevzev','u522145326_meow');
	if(!$link) echo mysqli_connect_error();
echo "INSERT INTO `item` (name,price,url) VALUES ('".$name."',".$price.",'".$uploadfile."')";
	$res=mysqli_query($link,"INSERT INTO `item` (name,price,url) VALUES ('".$name."',".$price.",'".$uploadfile."')");
		}
	function upload()
		{
			$this->setUpload();
		}

	function setUpload()
	{
		echo "<form action='' method='post' enctype='multipart/form-data'>
		<input type='text' name='name'>
		<input type='number' name='price'>
		<input type='file' name='uploadfile'>
		<input type='submit' name='upload' value='Çàãðóçèòü'></form>";
	}
}

class Tovar
{	
	var $name;
	var $price;
	var $picture;
	function construct($name,$picture,$price,$idtovar,$manufact,$pet_type_id,$description)
	{	

		echo "<div id='tovar'>";
			$this->setName($name,$idtovar,$picture,$manufact,$pet_type_id,$description,$price);
			$this->setPicture($name,$idtovar,$picture,$manufact,$pet_type_id,$description,$price);
			$this->setPrice($price);
			$this->setBuy($idtovar,$name,$price);
			
		echo "</div>";
	}
	
	function setStyle($color)
	{
				echo "<style>
					#tovar{
						background:".$color.";
					display:inline-block;
					margin:10px;
					/*padding:5px;*/
					}
					</style>";
	}
	function setMargin($content_width)
	{
		echo"<style>
			#content{
			max-width:".$content_width."px;
			margin:0px auto;
			}
			</style>";
	}

	function setName($name,$idtovar,$url,$manufact,$pet_type_id,$description,$price)
	{
		echo "<button id='button_link' class='no_background'  onClick='showPopup(".$idtovar.",`".$name."`,`".$url."`,".$price.",".$manufact.",".$pet_type_id.",`".$description."`)'/><div id='name' align='center' ''>".$name."</div></button><br/>";
	}
	function setSize($width,$height)
	{
		echo"<style>#tovar{width:".$width."px;height:".$height."px;margin:0px auto;}</style>";
	}
	function setPrice($price)
	{
		echo"<div id='price' align='center'>".$price." грн.</div>";	
	}
	function setPicture($name,$idtovar,$url,$manufact,$pet_type_id,$description,$price)
	{
		echo"<div id='picture' align='center'><button id='button_link' class='no_background'  onClick='showPopup(".$idtovar.",`".$name."`,`".$url."`,".$price.",".$manufact.",".$pet_type_id.",`".$description."`)'><img src='content/".$url."' width='170px' height='170px'></button></div>";
	}
	function setDetails ($idtovar)
	{
		echo "<div id='detailslink' align='center'><a id='button_link' href='about.php?id=".$idtovar."'/>Купить</a></div>";
	}
		function setBuy ($idtovar,$name,$price)
	{
		
		echo "<div id='detailslink' align='center'><button class='button' onclick='cart.addToCart(this, `".$idtovar."`, `".$name."`, `".$price."`)'>Купить</button></div>";
		//echo '<div id="detailslink" align="center"><input type="submit" class="button" name="item'.$idtovar.'" value="'.phrase("Êóïèòü").'"/></div>';
	}

}
class ToolBar
{
	function construct()
	{
		$this->sort();
		echo"<div id='header'>";
			echo'<form method="POST" action="">';
				echo "<ul class='toolbar'>";
				$this->SortByPrice();
				$this->SortByPetsAge();
				if($_GET['type']=='dog') $this->SortByType();
				$this->setSearch();
				$this->catchPost($_GET['price'],$_POST['age'],$_POST['search_text'],$_GET['type'],$_POST['size']);
				echo "</ul>";
			echo "</form>";
		echo"</div>";

	}
	function SortByPrice()
	{
		echo '<li>Цена<a href="?price=asc&age='.$_GET['age'].'&search='.$_GET['search'].'&type='.$_GET['type'].'&size='.$_GET['size'].'"><span class="glyphicon glyphicon-triangle-top elements" aria-hidden="true"></span></a><a href="?price=desc&age='.$_GET['age'].'&search='.$_GET['search'].'&type='.$_GET['type'].'&size='.$_GET['size'].'"><span class="glyphicon glyphicon-triangle-bottom elements" aria-hidden="true"></span></a></li>';
	}

	function SortByPetsAge(){
		$age_arr=array("jun"=>"Малыши","pregnant"=>"Беременные","adults"=>"Взрослые","grand"=>"Старые");
		if(isset($_GET['age'])){
			echo '<script>$( document ).ready(function() {$("#age option[value=\''.$_GET['age'].'\']").attr("selected", true).text("'.$age_arr[$_GET['age']].'");});</script>';
		}
		
		echo '<li>Возраст: <select id="age" name="age" style="border:none;background-color:transparent;">
  <option value="jun"><a href="?age=jun">Малыши</a></option>
  <option value="adults">Взрослые</option>
  <option value="grand">Пожилые</option>
</select></li>';
	}
	function SortByType()
	{
		echo '<li>Размер: <select id="age" name="size" style="border:none;background-color:transparent;">
  <option value="small">Мелкие</option>
  <option value="medium">Средние</option>
  <option value="big">Крупные</option>
</select></li>';
	}
	function setSearch()
	{
				echo '<li><input type="text" class="input" name="search_text"/></li><li><input type="submit" class="input search" name="search" value="Поиск" /></li>';
	}
	function catchPost($price,$age,$search,$type,$size)
	{
		if(isset($_POST['search']))
		{
			echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=?price='.$price.'&age='.$age.'&search='.$search.'&type='.$type.'&size='.$size.'">';
		}
	}

	function sort()
	{
		if($_GET['price'])
		{
			$by_price=$_GET['price'];
		}
		
	}
}
?>