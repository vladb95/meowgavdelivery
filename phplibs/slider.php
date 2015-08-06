<?PHP
class Slider{
	function getUrl()
	{
			$slider_url=0;
			$link=mysqli_connect('127.0.0.1','solarstu_yan','zev1982z','solarstu_meow');
			mysqli_set_charset($link, "utf8");
			if(!$link) echo mysqli_connect_error();
			if($result = mysqli_query($link,"SELECT * FROM slider"))
			{
					while($row = mysqli_fetch_assoc($result))
					{
						$slider[]=$row['url'];
					}
			}
		return $slider;
	}
	
	function Slider()
	{
				$slider=$this->getUrl();
		echo '			
		    <div class="carousel slide" id="carousel-example" data-ride="carousel">
			<ol class="carousel-indicators">
			<li data-target="#carousel-example" data-slide-to="0" class="active"></li>';
		for($i=1;$i<count($slider);$i++)
		{
			echo '<li data-target="#carousel-example" data-slide-to="'.$i.'"></li>';
		}
		echo '</ol>';
		echo'	<div class="carousel-inner">
				<div class="item active">
					<img src="img/slider/'.$slider[0].'" alt="">
					<!--<div class="carousel-caption">This is slide</div>-->
				</div>';
		for($i=1;$i<count($slider);$i++)
		{
			echo '<div class="item">
					<img src="img/slider/'.$slider[$i].'" alt="">
					<!--<div class="carousel-caption">This is slide</div>-->
				  </div>';
		}
		echo '</div>';
	}
}
class SliderSettings
{
	function SliderSettings()
	{$count=array();
			$link=mysqli_connect('127.0.0.1','solarstu_yan','zev1982z','solarstu_meow');
			mysqli_set_charset($link, "utf8");
			if(!$link) echo mysqli_connect_error();
			if($result = mysqli_query($link,"SELECT * FROM slider"))
			{
					echo '<form method="POST" action="'.$_SERVER['PHP_SELF'].'" enctype="multipart/form-data"><table align="center">';
					while($row = mysqli_fetch_assoc($result))
					{
						$index=$row['id'];
						
											//
					if(isset($_POST['delete'.$index]))
						{
							$this->delete($link,$row['id'],$row['url']);
						}	
					//
						echo '
							<tr>
								<td><img width="100%" height="75px" src="img/slider/'.$row['url'].'"/></td>
								<td><button type="submit" class="btn_border" style="background:none;border:0px;" name="delete'.$row['id'].'"><span class="glyphicon glyphicon-remove"></span></button> </td>
							</tr>';
							
					}
					echo'	<tr>
								<td><input type="file" name="uploadfile"></td>
								<td><button class="btn_border" type="submit" style="background:none;border:0px;" name="upload"><span class="glyphicon glyphicon-plus"></span></button></td>
							</tr>';
					echo'</form></table>';
					

					
			}
			if(isset($_POST['upload']))
			{
				$query="INSERT INTO slider (url) VALUES ('".$_FILES["uploadfile"]['name']."')";
				$this->load($link,$query);
			}

	}
	function load($link,$query)
	{
		
								$uploaddir = './img/slider/';
							$uploadfile = $uploaddir.basename($_FILES["uploadfile"]['name']);
							if (move_uploaded_file($_FILES["uploadfile"]['tmp_name'], $uploadfile))
							{
						$query="INSERT INTO slider (url) VALUES ('".$_FILES["uploadfile"]['name']."')";
								mysqli_query($link,$query);
							echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=">';
							}
							else echo "Ошибка 404.";
	}
	function delete($link,$id,$name)
	{

		 			array_map('unlink', glob("./img/slider/".$name));
					mysqli_query($link,"DELETE FROM slider WHERE id=".$id);
					echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=">';
	}
}
?>