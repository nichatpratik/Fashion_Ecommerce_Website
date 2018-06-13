var refreshbtn;
//var cartcount = document.getElementById('cartcount').innerText;
//document.getElementById('cartcount').innerText = parseInt(cartcount) + product;

window.onload=function()
{
	refreshbtn=document.getElementById('refresh').addEventListener("click",refreshh);
	//var product = 0;
	function refreshh()
	{
		
		var http = window.location.href.substring(0,window.location.href.indexOf("php")+3);
		window.location.href = http;
			for(var i= 0 ,len=localStorage.length;i<len; i++){
			var key = localStorage.key(i);
			var newqtyid="qty";
			var newqty;
			//alert(key);
			//alert(key);
			if(key.substring(1,4) == 'tee'){
			//	alert(key);
				newqtyid = newqtyid+key;
				//alert(newqtyid);
				newqty = document.getElementById(newqtyid).value;
				//alert(newqty);
				localStorage.setItem(key,newqty);
				if(newqty==0){
					localStorage.removeItem(key);
					//len--;
					//i--;
				}
			}
		}
		var http = window.location.href.substring(0,window.location.href.indexOf("php")+3);
		window.location.href = http;
		//var cartcount = document.getElementById('cartcount').innerText;
		//document.getElementById('cartcount').innerText = product;
		
	}
	
}