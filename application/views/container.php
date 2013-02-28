<link rel = "stylesheet" type = "text/css" href = "<?=base_url();?>assets/css/bootstrap.css">
<link href="<?=base_url();?>assets/favicon/favicon.ico" rel="icon" type="image/x-icon" />

<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-1.9.1.js"></script>

<title>SMYL</title>
<!--CSS für Welcome / Wird später separat-->
<style type = "text/css">
#home
{
	text-align:center;
}
#status
{
position: relative;
width: 200px;
height: 150px;
top: 50%;
left: 50%;
margin-top: 0px;
margin-left: -100px;
}
#input
{
position: relative;
width: 200px;
height: 150px;
top: 50%;
left: 50%;
margin-top: -70px;
margin-left: -100px;
}
#login
{
	position:relative;
	top:50px;
	text-align:center;
}
#reg
{
	position:relative;
	top:50px;
	text-align:center;
}
</style>

<script type="text/javascript">    
    function evalKeyForSubmit(event, frm) {  
      
       if (event && event.which == 13)
          frm.Submit.value=escape(frm.potng.value)  
          frm.action='go.asp'  
          frm.submit();  
       else  
          return true;  
    }  
</script>  