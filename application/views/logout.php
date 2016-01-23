<!DOCTYPE html>
<html lang="en">
<head>
  <title>SAG Portal</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="custom.css">   CodeIgniter-3.0.4/application/views/pages/bootstrap-3.3.6-dist\css-->
</head>
<body>
  
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li style="font-size:25px"><a href="#">SAG Portal</a></li> 
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Contact us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://localhost:8088/service/index.php/user_controller/signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <!-- <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
        </ul>
      </div>
    </div>
  </nav>
  <br/>

    <?php echo("<h3>Logged Out Successfully! :) </h3>");?>

   <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="jumbotron">
            <h2>Welcome All!</h2>
            <p>Welcome to the SAG Portal where you submit your problem and get relieved. We will Take care of rest of the stuff for you</p>
            <button class="btn btn-lg btn-primary">Learn More</button>
          </div>
        </div>
          <div class="col-md-4">

            <br/>
            <br/>
            <h3 style= "color:red"> Login Here <h3>

              <!-- <?php// echo validation_error s(); ?>  -->
       

            <!-- <?php //echo form_open('form'); ?> -->

            <form method="POST" action="http://localhost:8088/service/index.php/user_controller/loggedin">
              <div class="form-group" >
                <input type="text" name='userid' placeholder="User Id" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" name='password' placeholder="Password" class="form-control">
              </div>
              <div class="col-md-5"></div>
              <input type="hidden" name="action" value="login">
              <input class="btn btn-md btn-success" type="submit" value="Login">
              <!-- <button class="btn btn-md btn-success">Login</button> -->
              <!-- <button class="btn btn-md btn-danger">Register</button> -->

            </form>
        </div>
 
      </div>
    </div>
</body>
</html>
