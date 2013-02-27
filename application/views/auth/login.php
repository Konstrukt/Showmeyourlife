<div id = "login">
<h1>Login</h1>
<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <label for="identity">Email/Username:</label>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <label for="password">Password:</label>
    <?php echo form_input($password);?>
  </p>


 <p><input type = "submit" value = "Login!" class = "btn btn-primary btn-large"></p>
 <p>oder</p>
 <a href = "create_user" class = "btn btn-warning btn-large">Registrieren</a>

<?php echo form_close();?>
</div>