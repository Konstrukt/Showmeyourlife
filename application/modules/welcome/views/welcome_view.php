<style type = "text/css">
body
{
text-align:center;
}
</style>

<html>
    <head>
        <title><?php echo $this->lang->line('site_name'); ?></title>
    </head>
<body>
<div class = "hero-unit">
        <h2><?php echo $this->lang->line('welcome_message'); ?></h2>
		<a href = "auth" class = "btn btn-primary" ><?php echo $this->lang->line('login'); ?></a>
		<p><?php echo $this->lang->line('or'); ?></p>
		<a href = "auth/create_user" class = "btn btn-success" ><?php echo $this->lang->line('sign_in'); ?></a>
</div>
</body>
</html>