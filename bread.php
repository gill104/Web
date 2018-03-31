<!DOCTYPE html>
<html>
    <head>
    <title>
    </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="mainStyleSheet.css">

        <script>
	
		//modify this script to preload images instead.
		//Get the paths of the images then once preloaded show them?
        $(document).ready(function()
        {
				
			var images=[];
			function preload(){
				for(var x = 0; x < arguments.length; x++)
				{
					images[x] = new Image();
					images[x].src = preload.arguments[x];
				
					console.log(images[x]);
				}
			}
			preload(
		
				"Images/emp-pump.jpg",
				"Images/emp-pine.jpg",
				"Images/emp-pine.jpg",
				"Images/emp-chee.jpg",
				"Images/emp-cand.jpg",
				"Images/toast-square.jpg",
				"Images/toast-ear.jpg",
				"Images/sponge-white.jpg",
				"Images/sponge-wall.jpg",
				"Images/sponge-rose.jpg",
				"Images/sponge-leg.jpg",
				"Images/past-cup.jpg",
				"Images/past-pig.jpg"
			);
		
		
		});
		$(document).ready(function()
        {
            var jsonURL = "breadImages.json";
            $.getJSON(jsonURL,function(json)
            {
                var imgList = "";
                var count = 0;
				var classdef = 0;
                var items = [json.empanadas, json.toast, json.sponge, json.pasteries];
                for(var x = 0; x < items.length; x++)
                {
                    $.each(items[x], function(){
						var my_img = new Image();
						my_img.src = this.imgPath;
						console.log('first created: ' + my_img.src);
                        if(count == 3)
                        {   
                            imgList+= '</div>';
                            count = 0;
                        }
                        
                        if(count > 2 || count == 0){
                            imgList += '<div class="row">';
                        }
						//added style float testing 
                        imgList +=  '<div class="col-sm-4 resize-img ">' + 
                                        '<img style="float:left" id="'+classdef+'"class="img-thumbnail imgArr" src=#>' +
										'<h4 style:"float:right;"> Bread name:' + this.name+'</h4>' +
                                    '</div>';
                        count++;
						classdef++;
                    });
                }

                    $('#breadLi').append(imgList);//puts into a container below
                    console.log(imgList);
                });
            });
        </script>
	
    </head>
    <body>
        <?php include("navigationBar.php"); ?>

        <p style="margin-top:70px" >This is another page!!!!</p>

        <div id="breadLi" class="container-fluid" style="background: 'red';">

		<script>
			$(document).ready(function()//runs at this point while file being read
			{
				console.log('doing stuff inthis scrupt!!!');
					var jsonURL = "breadImages.json";
					var counter = 0;
					$.getJSON(jsonURL,function(json)
					{
						var items = [json.empanadas, json.toast, json.sponge, json.pasteries];
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
					});	
			
				function runit(idVal, img)
				{
					document.getElementById(idVal).src = img;
				}
			});
		</script>

       
    </body>
</html>