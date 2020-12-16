<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Goodang</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Masuk</a>
                    <a href="{{ url('/register') }}">Daftar</a>
                </div>
            @endif

            <div class="content">
            <div class="container" style="width: 100%; padding: 0px; margin-top: 25%;"> 
              <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -25%;margin-left: 0px; margin-right: 0px;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="max-height: 400px !important;">
                <div class="item active">
                    <img src="img/Carousel1.png" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="item">
                    <img src="img/Carousel2.png" alt="Chicago" style="width:100%;">
                </div>
    
                <div class="item">
                    <img src="img/Carousel1.png" alt="New york" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
            </div>

        <!-- Button Kategori -->
        <div class="row" style="padding-left: 5%;padding-top:3%;margin-right:0px; margin-left:0px;">
            <div class="col-sm-2">
                <div class="card">
                <div class="card-body">
                    <img src="{{url('img/sembako.png')}}" style="margin-left:50px" width ="120" alt="">
                </div>
                </div>
            </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <img src="{{url('img/tekstil.png')}}" style="margin-left:50px" width ="120" >  
                </div>
             </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
            <div class="card-body">
                <img src="{{url('img/Bahan kue.png')}}" style="margin-left:50px" width ="120" alt="">
            </div>
            </div>
        </div>
        <div class="col-sm-2">
             <div class="card">
            <div class="card-body">
                <img src="{{url('img/otomotif.png')}}" style="margin-left:50px" width ="120" alt="">
            </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
            <div class="card-body">
                <img src="{{url('img/bangunan.png')}}" style="margin-left:50px" width ="120" alt="">
            </div>
            </div>
        </div>
        </div>


    </body>
</html>
