<?php $this->config->load('tankstrap'); $tankstrap = $this->config->item('tankstrap');?>
<html>
<link href="<?php echo $tankstrap["bootstrap_path"];?>" rel="stylesheet">
<title><?php echo $tankstrap["login_page_title"];?></title>
<?php
$login = array(
    'name' => 'login',
    'id' => 'login',
    'value' => set_value('login'),
    'maxlength' => 80,
    'size' => 30,
);
if ($login_by_username AND $login_by_email) {
    $login_label = 'Email or Username';
} else if ($login_by_username) {
    $login_label = 'Login';
} else {
    $login_label = 'Email';
}
$password = array(
    'name' => 'password',
    'id' => 'password',
    'size' => 30,
);
$remember = array(
    'name' => 'remember',
    'id' => 'remember',
    'value' => 1,
    'checked' => set_value('remember'),
    'style' => 'margin:0;padding:0',
);
$captcha = array(
    'name' => 'captcha',
    'id' => 'captcha',
    'maxlength' => 8,
);
?>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style>
	#image
	{
    padding-top: 0px;
    padding-right: 10px;
    padding-bottom: 10px;
    padding-left: 10px;

	}
	body {
    background: url(http://localhost/SAG-portal-nitw/images.jpg);
    background-size: cover;
    background-repeat: no-repeat;
       }
       div.vertical-line{
  width: 1px; /* Line width */
  background-color: black; /* Line color */
  height: 100%; /* Override in-line if you want specific height. */
  float: right; /* Causes the line to float to left of content. 
    You can instead use position:absolute or display:inline-block
    if this fits better with your design */
}
	</style>
</head>
<body>
	<h1>
	<img id="image" src="http://localhost/SAG-portal-nitw/download.jpg" style="float:left;width:65px;height:65px;">
	National Institute Of Technology, Warangal
</h1>
</br>
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
 <!--  <div class="vertical-line" /> -->
<!-- <div class="vertical-line" style="height: 45px;" />
 -->
 <div class="row">
 	<div class="col-md-8">
 	</div>
 	<div class="col-md-4">
 		<div class="well">
<center><h3>Login</h3></center>
            <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
            <form class="form-horizontal">
                <div class="control-group">
                    <?php echo form_label($login_label, $login['id'], array('class' =>'control-label')); ?>
                    <div class="controls">
                        <?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
                        <?php echo form_input($login['id'], '', 'id="' . $login['id'] . '" placeholder="Email or username"'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo form_label('Password', $password['id'], array('class' =>'control-label')); ?>
                    <div class="controls">
                        <?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
                        <?php echo form_password($password['id'], '', 'id="' . $password['id'] . '" placeholder="Password"'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo form_label('Remember Me', $remember['id'], array('class' =>'control-label')); ?>
                    <div class="controls">
            			<?php echo form_checkbox($remember); ?>
                    </div>
                </div>   
                <div class="control-group">
                    <center><?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?>&nbsp; | &nbsp;<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?></center>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <?php echo form_submit('submit', 'Login', 'class="btn btn-primary"'); ?>
                    </div>                
                </div>
                        <?php echo form_close(); ?>
            </div>
        </div>
  
 	</div>
 </div>

</body>
</html>