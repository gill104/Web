<!DOCTYPE html>
<html>
    <head>
        <title></title>
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
    </script>

    </head>
    <body>

    <?php
        include "navigationBar.php"
    ?>

        <article id="top-fix-margin" class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!--Wrapper for slides-->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="Images/Donut.png" alt="donuts" />
                        </div>
                        <div class="item">
                            <img src="Images/Concha.png" alt="donuts2" />
                        </div>
                        <div class="item">
                            <img src="Images/ChocoConcha.jpg" alt="donuts3" />
                        </div>
                    </div>

                    <!--Left and right controls-->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </article>
        <article class="container">
            <div class="well well-sm">
                <h1> Welcoming message </h1>
                
                </nav>
            </div>
        </article>
        <footer style="background-color:black; color:white;">
            footer things here!
        </footer>
    </body>
</html>