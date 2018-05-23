# Smart-Form-Mail
A Smart Form Mail in PHP

processfeedback_v2.php has the following

Order processing script, which formats user data for output to an email and to HTML.

Many times you will need to arrange user strings  ( usually from an HTML form interface), so you can use them.

1. The first step in arranging process is to remove whitespace from the string.

At the beginning of the script, when you  give short names to input variables of the form, you can use the function trim() so you can arrange the input data as follows:

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$feedback = trim($_POST['feedback']);

Function trim() removes the whitespace at the beginning and at the end of a string and returns the resulting string. 

2. Function htmlspecialchars(), removes strings of particular importance in HTML n the equivalence entity HTML. 
For example, the character < converts to $lt; 

The key issue with email is that headers are separated from the string \r \n. So we should take care of this, so the user data that we use at email headers do not contain these characters, otherwise, we are at the risk of being attacked.

