<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
  <style>
  body {
    background: url(file:///home/rahul/Documents/111.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    }
    h1 {
    color: #ff4d4d
;
    text-decoration: underline;
    font-family:Courier;
}
h3{
	font-style: oblique;
}

  </style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			
			<h3 style = "text-color:black"> Detailed Complaint :</h3>
			
		    </br>
		    <p>
		    <h5><bold>CID</bold> &#160 : &#160 <?php echo $inf[0]['cid']; ?></h5>
		    </p>
		    <p>
		    <h5>Username &#160 : &#160 <?php echo $inf[0]['cid']; ?></h5>
		</p>
		<p>
		    <h5>Complaint Tag &#160 : &#160 <?php echo $inf[0]['cid']; ?></h5>
		</p>
		<p>
		    <h5>Complaint Descripton &#160 : &#160 <?php echo $inf[0]['details']; ?></h5>
		    <p>
		    	<p>
		    <h5>Date of Complaint &#160 : &#160 <?php echo $inf[0]['date']; ?></h5>
		</p>
		<p>
		    <h5>Hostel Name  &#160 : &#160  <?php echo $inf[0]['hostel']; ?></h5>
		</p>
		<p>
		    <h5>Room Number &#160 : &#160 <?php echo $inf[0]['room']; ?></h5>
		</p>
		<p>
		    <h5>Preferred Time  &#160 :  &#160 <?php echo $inf[0]['preftime']; ?></h5>
		</p>
		    <hr>
		    <h2>Report:</h2>
		    <h5></h5>

	
		</div>
		<div class="col-md-4">
		</br>
	    </br>

        </br>
        
        <?php if($inf[0]['status']!=1 AND $user_grp[0]['user_group_id']!=0  ): ?>
        <a href="resolved?cid=<?php echo $inf[0]['cid']; ?>">
         <div class="card card-inverse card-danger text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <h3>Resolved</h3>
      <p>CHOOSE if plroblem is completely solved</p>
   
    </blockquote>
  </div>
</div></a>
</br>

<a href="postpone?cid=<?php echo $inf[0]['cid']; ?>">
<div class="card card-inverse card-danger text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
    	<h3>Postpone</h3>
      <p>CHOOSE to postpone the problem</p>
      
    </blockquote>
  </div>
</div>
</a>
</br>
<a href="deleted?cid=<?php echo $inf[0]['cid']; ?>">
<div class="card card-inverse card-danger text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
    	<h3>Delete/Fale</h3>
      <p>CHOOSE if problem is improper</p>
     
    </blockquote>
  </div>
</a>
<?php endif; ?>
</div>

            </div>  
		</div>
	</div>
</div>
  
</div>
</body>
</html5