<?PHP
class Upload
{
	function load($price,$name)
		{
			$uploaddir = './files/';
			$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

			if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
			{
			echo "<h3>Файл успешно загружен на сервер</h3>";
			}
			else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }
			$link=mysqli_connect('localhost','fb3806ea_geweb','D[g#3GE8','fb3806ea_geweb');
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
		<input type='submit' name='upload' value='Загрузить'></form>";
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
			$this->setName($name);
			$this->setPicture($picture);
			$this->setPrice($price);
			$this->setDetails($idtovar);
			
		echo "</div>";
	}
	
	function setColor($color)
	{
				echo "<style>
					#tovar{
						background:".$color.";
					display:inline-block;
					margin:10px;
					}
					</style>";
	}
	function setName($name)
	{
		echo "<div id='name' align='center' ''>".$name."</div><br/>";
	}
	function setSize($width,$height)
	{
		echo"<style>#tovar{width:".$width."px;height:".$height."px;}</style>";
	}
	function setPrice($price)
	{
		echo"<div id='price' align='center'>".$price."</div>";	
	}
	function setPicture($picture)
	{
		echo"<div id='picture' align='center'><a href='tovar8.php?id=".$idtovar."'/><img src='".$picture."' width='100px' height='100px'></a></div>";
	}
	function setDetails ($idtovar)
	{
		
		echo "<div id='detailslink' align='center'><a id='button_link' href='tovar8.php?id=".$idtovar."'/>Подробнее</a></div>";
	}
}
?>