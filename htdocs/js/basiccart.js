window.onload=function(){
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