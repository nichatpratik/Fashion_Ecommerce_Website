var track;
//var cartcount = document.getElementById('cartcount').innerText;
//document.getElementById('cartcount').innerText = parseInt(cartcount) + product;

window.onload=function()
{
	track=document.getElementById('btn1').addEventListener("click",cart);
	//var product = 0;
	function cart()
	{
		var http = window.location.href.substring(0,window.location.href.indexOf("php")+3);
		window.location.href = http;
		var pcode=document.getElementById('pcode').innerText;
		//alert(pcode);
		var product = 0;
		if(typeof(Storage)!== "undefined"){
			if(localStorage.getItem(pcode) === null || localStorage.getItem(pcode)=== NaN)
			{
				localStorage.setItem(pcode,1);
				product = 1;
			}
			else{
				product = localStorage.getItem(pcode);
				product = parseInt(product)+1;
				localStorage.setItem(pcode,product);
			}
		}
		
		//var cartcount = document.getElementById('cartcount').innerText;
		//document.getElementById('cartcount').innerText = product;
		
	}
	var carttract=document.getElementById('cart').addEventListener("click",clickcart);
	function clickcart()
	{
		var url = "";
		var tval = 0;
		for(var i= 0 ,len=localStorage.length;i<len; i++){
			var key = localStorage.key(i);
			//alert(key);
			if(key.substring(1,4) == 'tee'){
				
				var values = localStorage[key];
				url += key + '->' + values + '@';
				tval = tval + parseInt(values);
				//alert("Product: "+key+"\nQty: "+values);
			}
		}
		//alert("Total Products: "+tval);
		localStorage.setItem("tval",tval);
		/*for ( var i = 0, len = localStorage.length; i < len; ++i ) {
			console.log( localStorage.getItem( localStorage.key( i ) ) );
		}*/
		///window.location.href = "cartaction.php?data=htee2->3@htee1->3";
		citem= "?data="+url;
		localStorage.setItem("citem",citem);
		window.location.href = "cartaction.php?data="+ url;
	}
}
