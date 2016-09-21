<html>
    {!! Html::style('css/bootstrap.min.css') !!}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Warrior!!@yield('title')!!</title>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src="images/mariobros.jpg">
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Escritorio <span class="sr-only">(current)</span></a></li>
                        <li><a href="product">Productos</a></li>
                        <li><a href="marcas">Marcas</a></li>
                    </ul>
                </div>
            </div>
        </nav> 
        
    </header>
    
    <body>
        
        <div class="container">
            
            @yield('content')
        </div>
        
        
        
    </body>

    <footer>

    </footer>

</html>