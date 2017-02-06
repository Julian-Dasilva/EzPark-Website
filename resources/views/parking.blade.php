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
    <link rel="stylesheet" href="css/normalize2.css">

    <link rel="stylesheet" href="css/style2.css">

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

@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="parking" method="post">
{!! Form::token() !!}
    <h1>Parking Reservation</h1>

    <fieldset>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <label for="mail">Email:</label>
        <input type="text" id="mail" name="email">

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone">

        <label for="time">Time of Day:</label>
        <select id="time" name="time">
            <optgroup label="Weekday Parking(mon-saturday)">
                <option value="morning">Morning (10am-2pm)</option>
                <option value="afternoon">Afternoon (2pm-6pm)</option>
                <option value="evening">Evening (6pm-10pm)</option>
            </optgroup>
            <optgroup label="Weekend Parking(Sunday)">
                <option value="afternoon_weekend">Afternoon (12pm-4pm</option>
                <option value="evening_weekend">Evening (4pm-8pm)</option>
            </optgroup>
        </select>
		
        <label>Level of Parking</label>
        <input type="checkbox" id="closest Parking" value="closest" name="proximity"><label class="light" for="closest">Closest Parking</label><br>
        <input type="checkbox" id="Midrange Parking" value="midrange" name="proximity"><label class="light" for="midrange">Midrange Parking</label><br>
        <input type="checkbox" id="Far Parking" value="far" name="proximity"><label class="light" for="Far">Far Parking</label>

    </fieldset>
	<p class="forgot"><a href="home.html">back to home?</a></p>
    <button type="submit">Reserve your spot now</button>
</form>
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