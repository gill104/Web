function LoopItems(){
    for(var x = 0; x < items.length; x++)
	{
	    $.each(items[x], function(){
								//var my_img = new Image();
								//my_img.src = this.imgPath;
		console.log(this.imgPath);
		console.log(counter);
						
		runit(counter, this.imgPath);
		counter++;
	    });
    }
}
function runit(idVal, img)
{
    document.getElementById(idVal).src = img;
}