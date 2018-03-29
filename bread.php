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
                $.each(json.empanadas, function(){
                    if(count == 3)
                    {   
                        imgList+= '</div>';
                        count = 0;
                    }
                    
                    if(count > 2 || count == 0){
                        imgList += '<div class="row">';
                    }
                    imgList +=  '<div class="col-sm-4 resize-img">' + 
                                    '<img class="img-thumbnail" src="' + this.imgPath + '">' +
                                '</div>';
                    count++;
                });
               
                $('#breadLi').append(imgList);
                console.log(imgList);

                //document.getElementById("breadLi").innerHTML=imgList;
                });
            });
        </script>
    </head>
    <body>
        <?php include("navigationBar.php"); ?>
        <p style="margin-top:70px" >This is another page!!!!</p>

        <div class="container">
            <div class="row">
                <div class="col-sm-4 resize-img" >
                    <img class="img-thumbnail" src="Images/AmaConcha.png" alt="yellow shell" />
                    <p>This is a concha that we have</p>
                </div>
                <div class="col-sm-4 resize-img">
                    <img class="img-thumbnail" src="Images/RosaConcha.png" alt="pink shell" />
                </div>
                <div class="col-sm-4 resize-img">
                    <img class="img-thumbnail" src="Images/ChocoConcha.jpg" alt="brown shell"/>
                </div>
                <div class="col-sm-4 resize-img" >
                    <img class="img-thumbnail" src="Images/emp-pine.jpg" alt="yellow shell" />
                    <p>This is a concha that we have</p>
                </div>
                <div class="col-sm-4 resize-img">
                    <img class="img-thumbnail" src="Images/emp-pump.jpg" alt="pink shell" />
                </div>
                <div class="col-sm-4 resize-img">
                    <img class="img-thumbnail" src="Images/ChocoConcha.jpg" alt="brown shell"/>
                </div>
            </div>
            <div class="row" style="background-color:red;">
               
            </div>
        </div>
        <div id="breadLi" class="container">
        </div>

       
    </body>
</html>