<div id = "home">
	<div class = "hero-unit">
		<h3>Willkommen!</h3>
		<?php echo $user->username;?>
		<br>
		<a href = "auth/logout">Logout</a>
		<br>
		<img src="<?=base_url();?>assets/pics/<?php echo $user->username;?>.jpg" class="img-polaroid" style = "width:150px">
		
<!--Avatar hochladen-->
<?php echo form_open_multipart('welcome/ava');?>
	<input type="file" name="userfile"/>
	<br>
	<input type="submit" class = "btn btn-success" value="Avatar &auml;ndern" />
</form>
<!--Avatar hochladen ENDE-->

<!--Input-->
<?php echo form_open('welcome/post');?>
<input type = "text" name = "posting" placeholder = "Deine Nachricht...">
<br>
<input type = "submit" value = "Posten!" class = "btn btn-info">
</form>
<!--INPUT END-->
</div>
</div>
<!--GET-->
<?php
if(isset($get))
{
	foreach($get as $ausgabe)
	{
		echo "<div class = 'well'>";
		echo "<img src='".base_url()."assets/pics/".$user->username.".jpg' class='img-polaroid' style ='width:100px'><br>";
		echo $ausgabe->name."<br>";
		
		echo $ausgabe->post."<br></div>";
		
	}
}
?>
<!--GET END-->
	</div>
