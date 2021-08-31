<?php

//XSS vulnurable code line 4-5
$comment = $_GET['comment'];
$name = $_GET['name'];

//Safe lines for html context .8-9 (using htmlspecialchars function)
//$comment = htmlspecialchars($_GET['comment']);
//$name = htmlspecialchars($_GET['name']);

//Log the user data as name-comment pairs
$user_data = $name.'*divide*'.$comment;
file_put_contents('stored_xss_comments.txt', $user_data. PHP_EOL, FILE_APPEND | LOCK_EX);

//Redirect
header("location: http://learnvul.com/XSS/Stored_XSS/stored_xss_html_context.php");


?>