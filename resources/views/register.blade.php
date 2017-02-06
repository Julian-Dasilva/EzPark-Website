<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <title>EzPark - Sign-Up/Login Form</title>

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/normalize.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
   <link href="css/business-casual.css" rel="stylesheet">
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
<script src="js/jquery.js"></script>


<script src="js/bootstrap.min.js"></script>
<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
            <h1>Sign Up for Free</h1>

            <form action="registration" method="post" >


                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            First Name<span class="req">*</span>
                        </label>
                        <input type="text" name="fname"required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Last Name<span class="req">*</span>
                        </label>
                        <input type="text" name="lname"required autocomplete="off" />
                    </div>
                </div>

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="text" name="email"required autocomplete="off" />
                </div>

                <div class="field-wrap">
                    <label>
                        Phone Number<span class="req">*</span>
                    </label>
                    <input type="text" name="phone"required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Set A Password<span class="req">*</span>
                    </label>
                    <input type="password" name="password"required autocomplete="off"/>
                </div>
                {!! Form::token() !!}
					<p class="forgot"><a href="home.html">back to home?</a></p>
                <button type="submit" class="button button-block"/>Get Started</button>


            </form>

        </div>

        <div id="login">
            <h1>Welcome Back!</h1>

            <form action="login" method="post">
                {!! Form::token() !!}
                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off" name="email" id="password"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Password<span class="req">*</span>
                    </label>-
                    <input type="password"required autocomplete="off" name="password" id="password"/>
                </div>

                <p class="forgot"><a href="home.html">back to home?</a></p>

                <button type="submit" class="button button-block"/>Log In</button>

            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->

<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

<script src="js/register.js"></script>

</body>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Copyright &copy; EzPark 2015</p>
            </div>
        </div>
    </div>
</footer>

</html>