<html>
   {!! Html::style('css/bootstrap.min.css') !!}
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
    <head>
        <title>Dashboard</title>
    </head>
    
         
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="/dashboards">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 3 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 3-1</a></li>
                            <li><a href="#">Page 3-2</a></li>
                            <li><a href="#">Page 3-3</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
                
            </div>
        </nav>
        <div class="colores">
             Hola   
        </div>
    </body>
    
    
    <footer>
        
    </footer>
</html>