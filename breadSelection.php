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

        <script type="text/javascript" src="testScript.js"></script>

        <link rel="stylesheet" type="text/css" href="mainStyleSheet.css">
        
		<script>
		$(document).ready(function()
        {
            var jsonURL = "breadImages.json";
           
            $.getJSON(jsonURL,function(json)
            {
                <?php
                if(isset($_GET['type'])){
                    echo "var type = " . $_GET['type'] . ";";

                }
                else{
                    echo 'Error: no type';
                }
                ?>
                var imgList = "";
                var count = 0;
				var classdef = 0;
                var breadTypes = [json.empanada, json.toast, json.sponge, json.pastry];

                $.each(breadTypes[type], function(){
                    console.log('type: ' + type);
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
                    imgList +=  '<div id="li-container" class="container col-xs-4 col-sm-3">' + 
                                        '<img style="float:left;" id="'+classdef+'"class="img-thumbnail imgArr" src=#>' + 
                                        '<div class="container col-sm-12">' +
                                            '<h4 style="color:white"> Name:' + this.name + '</h4>' +
                                            '<h4 style="color:white"><span class="glyphicon glyphicon-usd"></span> : ' + this.price + 'c</h4>' +
                                            '<form action="submit.php" method="post">' +
                                                '<p style="color:white;">Amount:</p>'+
                                                '<input type="number" name="amount" min="1" max="99">'+
                                                '<input type="submit">' +
                                            '</form>'+
                                        '</div>' +
                                '</div>';
                    count++;
                    classdef++;
                });
            /// }

                $('#breadLi').append(imgList);//puts into a container below
                console.log(imgList);
            });
        });
            
        </script>
	
    </head>
    <body>
        <?php include("navigationBar.php"); ?>
        <!--mk a sub nav bar to show all breads or catagories of them-->

        <h1 style="margin-top:70px" id=title-page class="heading">This is another page!!!!</h1>

        <div id="breadLi" class="container-fluid" style="background: 'red';">

        
        
        <script>
            <?php
                if(isset($_GET['type'])){
                    echo "var type = " . $_GET['type'] . ";";
                    
                }
                else{
                    echo 'Error: no type';
                }
            ?>
            switch(type)
            {
                case 0:
                    document.getElementById("title-page").innerHTML = "Empanadas";
                    break;
                case 1:
                    document.getElementById("title-page").innerHTML = "Toast";
                    break;
                case 2:
                    document.getElementById("title-page").innerHTML = "Sponge";
                    break;
                case 3:
                    document.getElementById("title-page").innerHTML = "Pastry";
                    break;
                default:
                    document.getElementById("title-page").innerHTML = "Missing";
                    break;
               
            }
            $(document).ready(function() {
                showImg(type);
        });
        </script>
       
    </body>
</html>