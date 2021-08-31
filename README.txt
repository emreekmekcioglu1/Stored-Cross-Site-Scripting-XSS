This folder contains a stored xss example for HTML context. There is a web blog for make awareness about global warming. First user is welcomed with a page that he/she can add 
comment about global warming (stored_xss_comment_front.php) and when he/she made the comment and fill the username, the processor (stored_xss_comment_processor.php) log the name
username and his/her comment to a txt file (for simplicity of the example) then it redirect the user to the comment page (stored_xss_html_context.php) where he/she can see others
comments, this page read the txt file which holds username-comment pairs. S,nce there is no validation or sanitization in the default there is possible stored xss vulnerabililty. 
Attacker can inject malicious payloads and can steal cookies etc.  The aim of the folder is show why and how this vulnerabilitiy rise and how to prevent it. You can see the comments
in php files which show the prevention. 
The attack vector rises from the lines 4-5 in the stored_xss_comment_processor.php since it directly take the user_data from form and log it to the stored_xss_comments.txt . There 
can be different preventions for different contexts (in this example it is HTML context and the prevention is using htmlspecialchars() function.) but the thing is the prevention 
should made when taking the input. You can see also a prevention in stored_xss_html_context.php in line 13-14 but it is not a really good way to prevent because by this way the 
malicious user input is stored on db but if we made in lines 4-5 in the stored_xss_comment_processor.php the user input is filtered before going to database. Why this is better?
Because if we are doing the prevention in the output areas we should do it for every output point and it an be forgettable in the future but if we sanitize the user data before put
it on to the db there would be sanitized data for future output points. 
