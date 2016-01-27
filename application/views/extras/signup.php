<!DOCTYPE html>
<html lang="en">
<head>
  <title>SAG Portal</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="custom.css">
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
          <li style="font-size:25px"><a href="http://localhost:8088/service/index.php/user_controller">SAG Portal</a></li> 
          <li class="active"><a href="http://localhost:8088/service/index.php/user_controller">Home</a></li>
          <li><a href="#">Contact us</a></li>
        </ul>
        <!-- <ul class="nav navbar-nav navbar-right"> -->
          <!-- <li><a href="user_controller/signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
          <!-- <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
     <div class="col-md-8">
          <div class="jumbotron">
            <h2>Welcome All!</h2>
            <p>Welcome to the SAG Portal where you submit your problem and get relieved. We will Take care of rest of the stuff for you</p>
            <button class="btn btn-lg btn-primary">Learn More</button>
          </div>
        </div>
 
      <div class="col-md-2"></div>
          <div class="col-md-4">
            <form method="POST" action='http://localhost:8088/service/index.php/user_controller/signedup'>
              <div class="form-group">
                <input type="text" name='name' placeholder="Name" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" name='course' placeholder="Course" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" name='year' placeholder="Year of study" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" name='userid' placeholder="User Id" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" name='password' placeholder="Password" class="form-control">
              </div>
              <div class="form-group">
                <input type="number" name='mobile' placeholder="Contact Number" class="form-control">
              </div>
              <input type="hidden" name="action" value="register">
              <input class="btn btn-md btn-danger" type="submit" value="Register">
              <!-- <button style="margin-left:40%" class="btn btn-md btn-danger">Register</button> -->

            </form>

          </div>
    
      </div>
    </div>

</body>
<!--  
<?php
  /*function fn(){
    if(empty($_POST['userid1']) or empty($_POST['password1']) or empty($_POST['name1']) or empty($_POST['mobile1']) ) {

    echo('<script> window.alert("please Enter All Mandatory Fields!")</script>');
  }
  else
  {
    header("Location: loginauthorization.php");
      exit;

  }

  }
*/
?>
 -->