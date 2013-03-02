<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
<!--[if IE 7]>         <html class="ie7"> <![endif]-->
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html>         <!--<![endif]-->

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>DB Caching Example</title>
	<style type="text/css" media="screen">
		
	</style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<input type="hidden" name="cache" value="cache"> 
		<input id="cache" type="submit" value="Cache datasource">
	</form>
</body>
</html>

<?php require('lib/config.php'); require('lib/functions.php');  require('classes/Cache.php');
$cache = new Cache($config);
$data = $cache->init($cache->message, $cache->mode);

?>