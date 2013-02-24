<style type = "text/css">
body
{
position:relative;
top:50px;
text-align:center;
}
</style>
<div id="infoMessage"><?php echo $message;?></div>
<h2>Login</h2>

<?php echo form_open("auth/login");?>

  <p>
    <label for="identity">Email/Username:</label>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <label for="password">Password:</label>
    <?php echo form_input($password);?>
  </p>

  <p><input type = "submit" value = "Login" class = "btn btn-success"></p>

<?php echo form_close();?>
