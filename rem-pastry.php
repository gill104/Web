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
		$(document).ready(function()
        {
            var jsonURL = "breadImages.json";
            $.getJSON(jsonURL,function(json)
            {
                var imgList = "";
                var count = 0;
				var classdef = 0;
                //var items = [json.pastry];
                //for(var x = 0; x < items.length; x++)
                //{
                    $.each(json.pastry, function(){
						var my_img = new Image();
						my_img.src = this.imgPath;
						console.log('first created: ' + my_img.src);
                        if(count == 4)
                        {   
                            imgList+= '</div>';
                            count = 0;
                        }
                        
                        if(count > 3 || count == 0){
                            imgList += '<div class="row">';
                        }
						//added style float testing 
                        imgList +=  '<div id="li-container" class="container col-sm-3">' + 
                                            '<img style="float:left;" id="'+classdef+'"class="img-thumbnail imgArr" src=#>' + 
                                            '<div class="container col-sm-3">' +
                                            '<h4 > Bread name:' + this.name + '</h4>'+
                                            '</div>'+
                                    '</div>';
                        count++;
						classdef++;
                    });
               // }

                    $('#breadLi').append(imgList);//puts into a container below
                    console.log(imgList);
                });
            });
        </script>
	
    </head>
    <body>
        <?php include("navigationBar.php"); ?>
        <!--mk a sub nav bar to show all breads or catagories of them-->

        <p style="margin-top:70px" >This is another page!!!!</p>

        <div id="breadLi" class="container-fluid" style="background: 'red';">

        <script type="text/javascript" src="testScript.js"></script>
        <script>
            $(document).ready(function() {
                showImg(3);
        });
        </script>
		<!--<script>
            $(document).ready(
            function showImg()
            {
                var jsonURL = "breadImages.json";
                var counter = 0;
                $.getJSON(jsonURL,function(json)
                {
                    $.each(json.pastry, function(){
                        document.getElementById(counter).src = this.imgPath;
                        counter++;
                    });	
                });			
            });
		</script>-->

       
    </body>
</html>