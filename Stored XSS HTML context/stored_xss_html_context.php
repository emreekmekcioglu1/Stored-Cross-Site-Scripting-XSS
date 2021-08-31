<?php
//Function for reading the content and list them.
function show_comments(){
	if ($file = fopen("stored_xss_comments.txt", "r")) {
    while(!feof($file)) {
        $name_comment = fgets($file);
        $pos = strpos($name_comment, "*divide*");
        
        $comment = substr($name_comment,$pos+8);	
        $name = substr($name_comment,0,$pos);
        //Burası -----------------------------

        //$comment_safe = htmlspecialchars($comment);
        //$name_safe = htmlspecialchars($name);

        //Burası ----------------------------
        echo "<div class='comment-box'><p>";
        echo "$name";
        //echo $name_safe;
        echo '<br>';
        echo "$comment";
        //echo $comment_safe; 	
        echo "</p></div>"; 
     }
    fclose($file);
 }
}
?>

<!DOCTYPE html>
<html>
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
</center>
<?php show_comments(); ?>

<center>
	<button type=“button”><a href="http://learnvul.com/XSS/Stored_XSS/stored_xss_comment_front.php">Make a comment</a></button>
</center>
</body>
</html>