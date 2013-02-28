<script>
function isEnterPressed(e){
var keycode=null;
if (e!=null){
	if (window.event!=undefined){
		if (window.event.keyCode) keycode = window.event.keyCode;
		else if (window.event.charCode) keycode = window.event.charCode;
	}else{
		keycode = e.keyCode;
	}
}
return (keycode == 13);}
</script>
<div class = "nav">
	<div class = "hero-unit">
		<h2>Welcome</h2>
		   <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">  
                  Avatar upload!
                </a> <br>
			<!--Avatar-->
<img src="<?=base_url();?>assets/pics/<?php echo $user->first_name;?>.jpg" class="img-polaroid" style = "width:150px">
			<!--Bgrüssung-->
			<?php echo "Hallo " . $user->first_name . ".";?>
			<!--Logout-->
			<small><a href = "auth/logout">Logout</a></small>
			<!--Post-->
			<?php echo form_open('welcome/post_insert');?>

<input type="text" name = "post" onkeyup="if(isEnterPressed(event)){}" placeholder = "Press ENTER to Submit!" />
			</form>
			
			<!--Ava-Upload-->
           <div id="collapseOne" class="accordion-body collapse" style="height: 0px; ">  
                <div class="accordion-inner">  
                  	<?php echo form_open_multipart('welcome/do_upload');?>
				<input type="file" name="userfile" size="20" />
				<button type="submit" class = "btn btn-primary"><i class="icon-leaf icon-white"></i> Avatar-Upload!</button>
			</form>
                </div>  
              </div>  
			<hr>
		
	</div>




<?php
if(isset($post)){
foreach($post as $get_post)
{?>
<div class = "well span12">
<div class = "user">
<?php
echo "<h6>".$get_post->name."</h6>";
echo "</div><br><img style = 'width:100px;'class='img-polaroid' src ='./assets/pics/" .$user->first_name.".jpg'><br>";
?>
<div class = "post">
<?php
echo "<h5>".$get_post->post."</h5>";
?>
</div>
</div>
<?php
}
}
?>
</div>
 
   <script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.js"></script> 
   <script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap-collapse.js"></script>
 