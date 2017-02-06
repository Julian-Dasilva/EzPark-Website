<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Page</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/business-casual.css" rel="stylesheet">


    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    
    
</head>

<body>

<div class="brand">EzPark</div>
<div class="address-bar">11300 ne 2nd ave| Miami Shores, FL 33161 | 407.687.8206</div>


<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          
            <a class="navbar-brand" href="index.html">EzPark</a>
        </div>
      
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="blog.html">Blog</a>
                </li>
                <li>
                    <a href="contact.html">Feedback</a>
                </li>
								 <li>
                    <a href="register.html">Register</a>
                </li>
				 <li>
                    <a href="parking.html">Parking</a>
                </li>

            </ul>
        </div>
       
    </div>
    
</nav>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <div id="carousel-example-generic" class="carousel slide">
                   
                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                  
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive img-full" src="img/slide1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="img/slide2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="img/slide3.jpg" alt="">
                        </div>
                    </div>

                   
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
                <h2 class="brand-before">
                    <small>Welcome to</small>
                </h2>
                <h1 class="brand-name">EzPark</h1>
                <hr class="tagline-divider">
                <h2>
                    <small>By
                        <strong>Barry Software Engineering Team</strong>
                    </small>
                </h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Save Yourself
                    <strong>Time and Money</strong>
                </h2>
                <p><br>Instead of spending a portion of your valuable time looking for parking in the busy streets and parking lots of Miami.<br> Start parking today with EzPark and enjoy the benefits of having a parking space reserved for you before you even get to the location. Now you are able to reserve parking online on your computer or phone!
                </p>
                <p></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">How to Use
                    <strong>EzPark</strong>
                </h2>
                <hr>
				@if(Auth::user())
				<p> {{ Auth::user()->fname }} </p>
				@endif
				@if(Session::has('success'))
					<p> {{ Session::get('success') }}</p>
				@endif

                <p>To get started sign up for our website by clicking <a href="register.html">here</a>.<br><br>
                    Next, simply click on<a href="parking.html"> start parking</a><br><br>
                    Follow the instructions on the parking page to reserve parking<br><br>
                    Enjoy the time you saved by reserving with EzPark!</p>

            </div>
        </div>
    </div>

</div>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Copyright &copy; EzPark 2015</p>
            </div>
        </div>
    </div>
</footer>


<script src="js/jquery.js"></script>


<script src="js/bootstrap.min.js"></script>


<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
