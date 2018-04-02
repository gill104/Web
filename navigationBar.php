<script>
    $(document).ready(function()
    {
        jsonFile = "breadImages.json";
        var breadList = "";
        var node;
        var textnode;
        var hrefnode;
        
        $.getJSON(jsonFile,function(json)
        {
            var breadTypes = [json.empanadas, json.toast, json.sponge, json.pastery];
            for(var key in json)
		    {
                node = document.createElement("Li");
                var anchor = document.createElement("a");
                anchor.innerHTML = key;
                //add conditional for if based on key name to only display 'x' images
                anchor.href = key+".php";
                node.appendChild(anchor);
                document.getElementById("btypes").appendChild(node);
				console.log(key);
			}
        });
    });

                        </script>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img id="logo" src="Images/invertlogo2.png"/></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown"
                       href="bread.php">Bread 
                       <span class="caret"></span>
                    </a> 
                    <ul id="btypes" class="dropdown-menu">
                    </ul>
                    
                </li>
                <li> <a href="#">Cakes</a> </li>
                <li> <a href="#">About Us </a> </li>
            </ul>
        </div>
    </div>
</nav>