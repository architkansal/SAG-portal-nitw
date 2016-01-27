<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
hr
{
	 display: block;
	margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 2px;
}
form.first
{
	text-align: center;
	border-radius: 5px;
    background-color: #cccccc;
    padding: 40px;
}
input[type=text], select {
    width: 50%;
    padding: 5px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

</style>
</head>
<body>
<h2 style="color:#737373;">Form</h2>
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
          <li><a href="index.php">Home</a></li>
          <!--<li><a href="#">Contact us</a></li>-->
        </ul>
        
      </div>
    </div>
  </nav>
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
<form class="first">
  <label for="fname">Name    :</label>
  <input type="text" id="fname" name="fname"><br>
  <label for="fname">Hostel      :</label>
  <input type="text" id="lname" name="lname"><br>
  <label for="fname">Room No.    :</label>
  <input type="text" id="lname" name="lname"><br>
  <label for="fname">Contact No. :</label>
  <input type="text" id="lname" name="lname" maxlength="10"><br>
  <h4>Select your problem</h4>

<select name="dropdown">
<option value="Water taps not working" selected>Water taps not working</option>
<option value="Pipelines blocked">Pipelines blocked</option>
<option value="Water leakage from pipes"> water leakage from pipes</option>
<option value="Others">Others</option>
</select>
 <h4>Describe your problem</h4>
 <p>(not more than 50 words)</p>
<textarea rows="5" cols="50" name="description" maxlength="200">
Enter description here...
</textarea>
</form>
<button type="button" class="btn btn-success btn-block">Submit</button>
</div>
<div class="col-md-4">
</div>
</body>
</html>