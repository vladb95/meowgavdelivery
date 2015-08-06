<?PHP
function head(){
	echo '<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/new_menu.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link href="css/m.css" rel="stylesheet">
	<link rel="stylesheet" href="css/dest/css/bootstrap.min.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="css/dest/js/bootstrap.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" ></script>
	<title>Admin Panel</title>
	</head> ';
}
function editor_form(){
		return '<form class="form-horizontal"><fieldset><div class="form-group"><label class="col-md-4 control-label" for="name">Название продукта</label>  <div class="col-md-4"><input id="name" name="name" type="text" placeholder="Название" class="form-control input-md" required=""></div></div><div class="form-group"><label class="col-md-4 control-label" for="product_type">Тип продукта</label><div class="col-md-4"><select id="product_type" name="product_type" class="form-control"><option value="1">Корма</option><option value="2">Консервы</option><option value="3">Акссесуары</option></select></div></div><div class="form-group"><label class="col-md-4 control-label" for="manufact">Производитель</label><div class="col-md-4"><select id="manufact" name="manufact" class="form-control"><option value="0">не указан</option></select></div></div><div class="form-group"><label class="col-md-4 control-label" for="pet_type">Животное</label><div class="col-md-4"><select id="pet_type" name="pet_type" class="form-control"><option value="1">Собака</option><option value="2">Кошка</option></select></div></div><div class="form-group"><label class="col-md-4 control-label" for="selectbasic">Возраст животного</label><div class="col-md-4"><select id="selectbasic" name="selectbasic" class="form-control"><option value="1">Малыши</option><option value="2">Беременные</option><option value="3">Взрослые</option><option value="4">Старые</option></select></div></div><div class="form-group"><label class="col-md-4 control-label" for="price">Цена</label>  <div class="col-md-4"><input id="price" name="price" type="text" placeholder="Цена" class="form-control input-md" required=""></div></div><div class="form-group"><label class="col-md-4 control-label" for="product_count">Количество продукта</label>  <div class="col-md-4"><input id="product_count" name="product_count" type="text" placeholder="Количество" class="form-control input-md" required=""></div></div><div class="form-group"><label class="col-md-4 control-label" for="comment">Описание продукта</label><div class="col-md-4"><textarea class="form-control" id="comment" name="comment"></textarea></div></div><div class="form-group"><label class="col-md-4 control-label" for="product_src">Лого продукта</label><div class="col-md-4"><input id="product_src" name="product_src" class="input-file" type="file"></div></div><div class="form-group"><label class="col-md-4 control-label" for="pets_size">Размер питомца (для собак)</label><div class="col-md-4"><select id="pets_size" name="pets_size" class="form-control"><option value="1">Маленькие</option><option value="2">Средние</option><option value="3">Большие</option></select></div></div></fieldset></form>';
	}

	function popup(){
		echo '
		<script>
		function showpopup(id,title,product_name){
		var str=\'\<div class="modal fade" id="myModal\'+id+\'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">\
  						<div class="modal-dialog" role="document">\
    						<div class="modal-content">\
      							<div class="modal-header">\
        							<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="document.getElementById(\'+id+\').parentNode.removeChild(document.getElementById(\'+id+\'))"><span aria-hidden="true">&times;</span></button>\
        							<h4 class="modal-title" id="myModalLabel">\'+title+\'</h4></div>\
      								<div class="modal-body">'.editor_form().'</div>\
      								<div class="modal-footer">\
        							<button type="button" class="btn btn-default" data-dismiss="modal" onclick="document.getElementById(\'+id+\').parentNode.removeChild(document.getElementById(\'+id+\'))">Close</button>\
        							<button type="button" class="btn btn-primary">Save changes</button>\
      							</div>\
    						</div>\
  						</div>\
					</div>\';
		var div = document.createElement(\'div\');
		div.setAttribute("id", id);
    	div.innerHTML = str;
    	
    	document.body.appendChild(div);
				};
		</script>';
	}
	head();
popup();
 echo '<button type="button" class="btn btn-primary btn-lg" onclick="showpopup(25,12,5)" data-toggle="modal" data-target="#myModal25" >
 Launch demo modal
</button>';
	?>