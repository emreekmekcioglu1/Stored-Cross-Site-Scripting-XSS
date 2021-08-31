<?php

session_start();
setcookie("cookie_name");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
	<center><title>BeAware</title></center>

</head>
<body>
<center>
<h1>Hello, please leave a comment about the global warming and make awareness.</h1>
<br><br>

<img src="http://learnvul.com\XSS\Stored_XSS\gw_photo.jfif" width="320" height="240">
<br><br>


<div id=comments >
<?php 
	echo "
	<form method='GET' action='stored_xss_comment_processor.php'>
		<input type=hidden name=cokkie value''>
		<textarea name=comment></textarea>
		<br>
		<input name ='name' type=text id=name placeholder='Username'>
		<button name='submit'>Make Awereness</button>				
	</form>
		"

?>
<br><br>
<button type=“button”><a href="http://learnvul.com/XSS/Stored_XSS/stored_xss_feed_front.php">See Comments</a></button>
</div>
</center>
</body>
</html>