 
<html>
 
 
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
    //'style' => 'margin:0;padding:0',
     'width'=>30,
     'height'=>100,
);
$captcha = array(
    'name' => 'captcha',
    'id' => 'captcha',
    'maxlength' => 8,
);
?>
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <meta charset="UTF-8">
    <title>Calm breeze login screen</title>
     <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">

     <style>
    input[type="checkbox"]
    {
      width:30px,
      height:30px,
    }
    </style>
</head>
<body>
<div class="wrapper">
  <div class="container">
    <h1>Welcome</h1>
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
 <?php echo form_label('', $login['id'], array('class' =>'control-label')); ?>
 <?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?> <?php echo form_input($login['id'], '', 'id="' . $login['id'] . '" placeholder="Email or username"'); ?>
<?php echo form_label('', $password['id'], array('class' =>'control-label')); ?>
 <?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
  <?php echo form_password($password['id'], '', 'id="' . $password['id'] . '" placeholder="Password"'); ?>
    <!-- <center> <?php echo form_label('remember', $remember['id'], array('class' =>'control-label')); ?></center>
    <center><?php echo form_checkbox($remember); ?></center> -->
    <center><?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?> </center><center><?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?>
   <center><?php echo form_submit('submit', 'Login', 'class="btn btn-primary"'); ?></center>
    <?php echo form_close(); ?>
</div>
  <ul class="bg-bubbles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
 </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="<?php echo base_url('assets/js/index.js')?>"></script>

    
    
    
  </body>
</html>

