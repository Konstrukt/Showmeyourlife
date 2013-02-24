<div id = "home">
	<div class = "hero-unit">
		<img src="<?=base_url();?>assets/pics/ava.jpg" class="img-polaroid" style = "width:150px">
		
<!--Avatar hochladen-->
<?php echo form_open_multipart('welcome/ava');?>
	<input type="file" name="userfile"/>
	<br>
	<input type="submit" class = "btn btn-success" value="Avatar &auml;ndern" />
</form>
<!--Avatar hochladen ENDE-->

	</div>
</div>