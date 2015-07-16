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
	function construct($name,$picture,$price,$idtovar)
	{	

		echo "<div id='tovar'>";
			$this->setName($name,$idtovar);
			$this->setPicture($picture,$idtovar);
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
<<<<<<< HEAD
	function setName($name,$idtovar)
=======
	function setName($name)
>>>>>>> 874a461c7bb2f1bd697dbea3e73298e32aa237b9
	{
		echo "<a id='button_link' href='tovar8.php?id=".$idtovar."'/><div id='name' align='center' ''>".$name."</div><br/>";
	}
	function setSize($width,$height)
	{
		echo"<style>#tovar{width:".$width."px;height:".$height."px;}</style>";
	}
	function setPrice($price)
	{
		echo"<div id='price' align='center'>".$price."</div>";	
	}
	function setPicture($picture,$idtovar)
	{
		echo"<div id='picture' align='center'><a href='tovar8.php?id=".$idtovar."'/><img src='img/".$picture."' width='150px' height='150px'></a></div>";
	}
	function setDetails ($idtovar)
	{
		echo "<div id='detailslink' align='center'><a id='button_link' href='tovar8.php?id=".$idtovar."'/>Купить</a></div>";
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
			echo "<ul class='toolbar'>";
			$this->SortByPrice();
			$this->SortByPetsAge();
			echo "</ul>";

		echo"</div>";

	}
	function SortByPrice()
	{
		echo '<li>Цена<a href="?price=asc"><span class="glyphicon glyphicon-triangle-top elements" aria-hidden="true"></span></a><a href="?price=desc"><span class="glyphicon glyphicon-triangle-bottom elements" aria-hidden="true"></span></a></li>';
	}

	function SortByPetsAge(){
		$age_arr=array("jun"=>"Малыши","pregnant"=>"Беременные","adults"=>"Взрослые","grand"=>"Старые");
		if(isset($_GET['age'])){
			echo '<script>$( document ).ready(function() {$("#age option[value=\''.$_GET['age'].'\']").attr("selected", true).text("'.$age_arr[$_GET['age']].'");});</script>';
		}
		
		echo '<li>Возраст: <select id="age" style="border:none;background-color:transparent;">
  <option value="jun"><a href="?age=jun">Малыши</a></option>
  <option value="pregnant">Беременные</option>
  <option value="adults">Взрослые</option>
  <option value="grand">Старые</option>
</select><li>';
	}

<<<<<<< HEAD
	function sort()
	{
		if($_GET['price'])
		{
			$by_price=$_GET['price'];
		}
		
	}
	
=======
>>>>>>> 874a461c7bb2f1bd697dbea3e73298e32aa237b9
}
?>