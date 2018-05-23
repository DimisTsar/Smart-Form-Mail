# Smart-Form-Mail
A Smart Form Mail in PHP

comments.php has the following

Order processing script, which formats user data for output to an email and to HTML.

Many times you will need to arrange user strings  ( usually from an HTML form interface), so you can use them.

1. The first step in arranging process is to remove whitespace from the string.

At the beginning of the script, when you  give short names to input variables of the form, you can use the function trim() so you can arrange the input data as follows:

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$comments = trim($_POST['comments']);

Function trim() removes the whitespace at the beginning and at the end of a string and returns the resulting string. 

2. Function htmlspecialchars(), removes strings of particular importance in HTML n the equivalence entity HTML. 
For example, the character < converts to $lt; 

The key issue with email is that headers are separated from the string \r \n. So we should take care of this, so the user data that we use at email headers do not contain these characters, otherwise, we are at the risk of being attacked.
One way is to use the function str_replace().

In a simple case like this, when you have to replace a whole string with other string, you should always use the str_replace() function.

3. The nl2br() function:

This feature is useful for viewing a large string in the browser. For example, you can use this function to format the customer comments and display them in a more readable form:

<?php echo nl2br(htmlspecialchars($comments)); ?>

HTML does not care about whitespace, so if you don't filter this output with nl2br(), τηε φεεδβαψκ will be showing up as a single line.

We apply the htmlspecialchars() function and then the nl2br() because if we did this with the opposite order, <br/> tags, that nl2br() function inserted would be translated as HTML entities from the htmlspecialchars() function therefore, there would be no effect. 

