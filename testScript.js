
	function showImg(x)
	{
		console.log(x);
		var jsonURL = "breadImages.json";
		var counter = 0;
		
		$.getJSON(jsonURL,function(json)
		{
			items = [json.empanada,json.toast,json.sponge,json.pastry];

			$.each(items[x], function(){
				document.getElementById(counter).src = this.imgPath;
				counter++;
			});	
		});					
	}
