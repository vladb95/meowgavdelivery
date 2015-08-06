/***************************************
 * JQuery based script					
 * Basket on client side 				
 * Created WebInside WebStudio (c) 2014	
 * Use only for linked www.webinside.ru 
 **************************************/
function WICard(obj)
	{
	this.widjetX = 0;
	this.widjetY = 0;	
	this.widjetObj;
	this.widjetPos;
	this.cardID = "";
	this.DATA = {};
	this.IDS = [];
	this.objNAME = obj;
	this.CONFIG = {};
	this.IMG = "iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABpFBMVEUAAABEREBEREBEREBEREASEhEJCQgGBgYBAQEAAAAGBgUHBwYAAAAAAAADAwNEREBEREAJCQkICAcGBgYFBQUJCQgnJyVEREAICAgBAQEAAAAICAcAAAAAAAAAAAAJCQgAAAAGBgYBAQEQEA8NDQwHBwcBAQEMDAsSEhEJCQkBAQEBAQEBAQFAQDxEREBEREADAwIAAAABAQESEhEkJCIAAAAICAgAAAAQEA9EREAAAAATExIAAAAKCgkNDQwAAAAAAAABAQETExIHBwcDAwMDAwMTExIAAAAAAAABAQEAAAAAAAAAAAAAAAAAAAAAAAADAwIAAAAGBgUBAQEWFhUAAAAAAAAHBwYBAQEVFRMDAwMHBwcUFBMWFhUBAQETExIAAAAAAAADAwMMDAsAAAAAAAASEhEAAAAUFBMAAAAJCQkrKygDAwMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAwMAAAAJCQgAAAAiIiABAQEAAAAAAAAAAAAAAAAAAAAAAAAAAAABAQFEREAFBQUBAQEAAAAGBgYICAgHBwcBAQEJW8x2AAAAhXRSTlMAAQcIAjJ0kZqZnp+LaygNDxKw/v6wIwPY1A+upf4nenGWvXCg/Pubc8eSmLkcHxpW+vlhBr6hl3EDUl9pop5Q+fhe+1FPXVT8mlxfXWD9+1dbnPRRRved9ldI+Fhd+mBaVlSYWJN1V2dqwwVTA8ORvJXAknRzKii2rCjc3BUTqagrepgUbRZwswAAAAlwSFlzAAAASAAAAEgARslrPgAAAb1JREFUOMuNk2dTwkAQhpdiCZagotiwd5RYQeyKJdii2FDsvffeG0TJnza3lzg4kBnv0zt5NpvdZ3IA/zs6vUGv00wAxrj4hESGnERTkomk5JRU1swaFZ6WnhEMieSEgl9qsmRmWVWe/R2W8KkUjkw5uUr/vNhcEvPpLHEZGly0FYA8pb4wqMFFscioBzAU06lKSsvKKa+orKqmqYY1yB3smGvrHFx9A0mNTQ6uuQU7Oc1yB50Lc6uDc0ObXNHYTlIHfqmTJaZcmLvkpwDdPb19hAODkzjRlAuzpx93GhhEPsTjpF6gBTg1PyxnN4d8hHKJoQUhuhU/qvKxcWVTWmAPKlsLE5RP8qoJLND5vhQ/U9PIYWZWNcWgyTnFpH+ecoCFgNKTQZM+atK/qHI3txSg73gjTC6vIF9dw0nXhSiTG8g3eaEeJ92KMrlN+I4gSp5dkvaiTO4fAKwJ6PQQ4Og4wuQJ3fp070zZXzhJOafpAgsuQ2Gtf+4KC64tWtx2gybZW61/8g7QpPn+ITZ/fAI0yVqfX2wx+r8+gxVNkl3f3j+cnU4v3j4vSa73NwDrJ5qkt+f3Jv5N6u3Vvt0/UGcpYbC85ecAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTMtMDUtMThUMDY6MDM6MzEtMDU6MDALk1CfAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDEzLTA1LTE4VDA2OjAzOjMxLTA1OjAwes7oIwAAAABJRU5ErkJggg==";
	
	
	this.init = function(widjetID, config)
		{
		this.CONFIG = config || {};
		try {
			this.DATA = JSON.parse(localStorage.getItem(widjetID)); // code to try
			//console.log("TRY - OK");
			if ($.isEmptyObject(this.DATA))
				{
				this.DATA = {};
				}	
					
			} 
			catch (e) 
			{
			this.DATA = {};
			//onsole.log("TRY - BED");
			}	
		try {
			this.IDS = JSON.parse(localStorage.getItem(widjetID + "_ids"));
			if ($.isEmptyObject(this.IDS))
				{
				this.IDS = [];
				}	
			} 
			catch (e) 
			{
			this.IDS = [];
			}	
		//console.log(this.DATA);
		
		this.cardID = widjetID;	
		$("body").append("<div class='bird' id='"+widjetID +"_bird'></div>");	
		this.widjetObj = $("#" + widjetID);
		this.widjetPos = this.widjetObj.position();	
		
		if ($.isEmptyObject(this.DATA))
			{
			this.widjetObj.html("Корзина пуста");
			}
			else
			{
			this.reCalc();	
			this.renderBasketTable();
			}
		
		}
		
/***********************************************************************************************
 * example: onclick="cart.addToCart(this, '2', 'Name of comic 2', '25500')						
 **********************************************************************************************/
	this.addToCart = function(curObj, id, name, price)
		{
		id = ( $.isNumeric(id) ) ?  id.toString() : id;
		 
		var goodieLine = {"id" : id, "name" : name, "price": price, "num" : 1, "url" : document.location.href};


		if ($.isEmptyObject(this.DATA))
			{
			this.DATA[id] = goodieLine;	
			this.IDS.push(id);
			}
		else
		for(var idkey in this.DATA) 
			{
			
			
			if($.inArray(id, this.IDS) === -1)
				{
				this.DATA[id] = goodieLine;
				this.IDS.push(id)
				
				}
			else	
			if (idkey == id)
				{
				
				this.DATA[idkey].num += 1;	
				
				}
			}
		
		localStorage.setItem(this.cardID, JSON.stringify(this.DATA));
		localStorage.setItem(this.cardID + "_ids", JSON.stringify(this.IDS));
		
		this.reCalc();
		
		this.renderBasketTable();
		
		
		
		/*var bird = $("#" + this.cardID + "_bird"); 
		var pos = $(curObj).position();	
		bird.offset({ top: pos.top, left: pos.left});
		bird.html(price);
		
		bird.show();*/
		
		/*bird.animate(
				{
				'left': this.widjetPos.left, 
				'top': this.widjetPos.top 
				}
				,
				{
				'duration': 500, 
				complete:  function() 
					{ 
					bird.offset({ top: -300, left: -300});
					}
				});*/
				
		if (this.CONFIG.showAfterAdd)
			{
			cart.showWinow('bcontainer', 1);
			}
		}
	this.reCalc = function()
		{
		var num = 0;
		var sum = 0; 	
		for(var idkey in this.DATA) 
			{
			num += parseInt(this.DATA[idkey].num);
			sum += parseFloat(parseInt(this.DATA[idkey].num) * parseFloat(this.DATA[idkey].price));
		
			}	
		this.widjetObj.html("Товаров: " + num + " на " + sum + " грн.");
		}
	this.clearBasket = function()
		{
		this.DATA = {};	
		this.IDS = [];
		this.widjetObj.html("Корзина пуста");	
		localStorage.setItem(this.cardID, "{}");
		localStorage.setItem(this.cardID + "_ids", "[]");
		$("#btable").html('');
		}
	this.formatTextBox=function(){
		cart.showWinow('order', 1);
		var elem=document.getElementById('orders_info');
		elem.value=localStorage.getItem("basketwidjet");
		
	}
	this.renderBasketTable = function()
		{
		
		if ($('#bcontainer').length == 0)
			{		
			$("body").append(" \
				<div id='blindLayer' class='blindLayer'></div> \
				<div id='bcontainer' class='bcontainer'> \
				<div id='bsubject'>КОРЗИНА<a id='bclose' href='#' onclick='" + this.objNAME + ".closeWindow(\"bcontainer\", 1);'><img src='data:image/jpeg;base64,"+ this.IMG + "' /></a></div> \
				<table id='bcaption'><tr><td>ID</td><td>Название</td><td>Цена</td><td>Кол-во</td><td>Итого</td><td></td></tr></table> \
				<div id='overflw'><table class='btable' id='btable'></table></div> \
				<div id='bfooter'> <button class='bbutton' onclick=\"cart.formatTextBox()\">Оформить заказ</button><span id='bsum'>...</span></div> \
				</div> \
			");	
			
			}
			else 
			{
			$("#btable").html("");	
			}
		this.center( $("#bcontainer") )	
		var sum = 0;
		for(var idkey in this.DATA) 
			{
			with (this.DATA[idkey])
				{
				sum += parseFloat(price * num);		
				var productLine = '<tr class="bitem" id="wigoodline-' + id + '"><td>'+ id +'</td><td><a href="' + url + '">'+ name +'</a></td><td class="wigoodprice">' + price + ' грн.</td><td>'+ num +'</td><td>'+ parseFloat(price * num) +'</td><td><a href="#" onclick="' + this.objNAME + '.delItem(\'' + id + '\')"><img src="data:image/jpeg;base64,'+ this.IMG + '" /></a></td></tr>';	
				}
			$("#btable").append(productLine);
			 
			}
		$("#bsum").html(sum + "  грн.");
		}
	this.center = function(obj)
		{
		
		obj.css({"top" : "200px"});
    	obj.css({"left" : Math.max(0, (($(window).width() - $(obj).outerWidth()) / 2) + $(window).scrollLeft()) + "px"});	
    	return obj;
		}	
	this.showWinow = function(win, blind)
		{
		$("#" + win).show();
		if (blind)
		$("#blindLayer").show();	
		}
	this.closeWindow = function(win, blind)
		{
		$("#" + win).hide();
		if (blind)
		$("#blindLayer").hide();	
		}
	this.delItem = function(id)
		{
		if (confirm("Удалить товар " + id + " из корзины?")) 
			{
			$("#btable").html("");	
			delete this.DATA[id];
			this.IDS.splice( $.inArray(id, this.IDS), 1 );
			this.reCalc();
			this.renderBasketTable();
			localStorage.setItem(this.cardID, JSON.stringify(this.DATA));
			localStorage.setItem(this.cardID + "_ids", JSON.stringify(this.IDS));
			} 
		}
	this.sendOrder = function(domElm)	
		{
		if (this.CONFIG.valudate)	
			{
			var valid = this.CONFIG.valudate.validationEngine('validate');
			if (!valid) return false;
			}
			
		var bodyHTML = "";
		var arr = domElm.split(",");
		
		for (var f=0; f < arr.length; f++) {
		
			bodyHTML +=  this.getForm(arr[f]) + "<br><br>";	
			
			};
		
		//return bodyHTML;
		$.post( "sendmail.php?subj=ZAKAZ BASKET", { "order": bodyHTML }).done(function( data ) {
		cart.closeWindow("bcontainer", 1)	
		cart.closeWindow("order", 0);
		if (cart.CONFIG.clearAfterSend)
			{
			cart.clearBasket();
			} 
		alert("Спасибо за покупку!\nМы свяжемся с Вами в ближайшее время");	
		});
		
		}
	this.getForm = function (formId)
		{
		var formObj = document.getElementById(formId);
		var copyForm = formObj.cloneNode(true);
		
		INPUTS=[].slice.call( copyForm.querySelectorAll("input,select,textarea") );
	
		INPUTS.forEach(function(elm)
			{
			if (elm.type == 'checkbox')
					{	
					var spanReplace = document.createElement("span");
  					spanReplace.innerHTML = (elm.checked) ? elm.value : "";	
					elm.parentNode.replaceChild(spanReplace, elm);	
					}
			else if ((elm.type == 'text') || (elm.type == 'hidden'))
					{	
					var subjP = document.createElement('b');
  					subjP.innerHTML = elm.placeholder;	
					elm.parentNode.insertBefore(subjP, elm);
					var spanReplace = document.createElement("div");
					spanReplace.innerHTML = elm.value;	
					elm.parentNode.replaceChild(spanReplace, elm);	
					}
			});
	
	
	return copyForm.innerHTML;
		}
	}
	
