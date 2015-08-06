<?php
include("phplibs/con_db.php");
		if(isset($_POST['itemtype'])){
			$sql=null;
			switch($_POST['itemtype']){
				case 'deletedish':$sql="DELETE FROM `acrm_schedule` WHERE `menu_id`=".$_POST['dish']." AND `weekdate_id`=".$_POST['day'];
					break;
				case 'deleteday':$sql='DELETE FROM `acrm_schedule` WHERE `weekdate_id`='.$_POST['day'];
					break;
				case 'visible':$sql='UPDATE  `acrm_schedule` SET visible=\''.$_POST['active'].'\' WHERE  weekdate_id=\''.$_POST['day'].'\'';
					break;
			}
			if(isset($sql)){
				mysqli_query($link,$sql);
			}
		}