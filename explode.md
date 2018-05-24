To take a domain name from the customer's email address in the script, you can use the code below:<br/>
<strong>$email_arr = explode('@', $email);</strong>
<br/>
This call to explode() breaks up the emai laddress in to parts: the user name, which stored to $email_arr[0] and the domain name, which stored to $email_arr[1].
<br/>
Now you can check the domain name, to note what is the origin of the customer and then to send the feedback to the responsible person.<br/>
<strong>If the domain starts with a capital letter or contains lowercase and uppercase letters, this approach will not work!</strong> You could avoid this issue by converting first the domain to uppercase only or to lowercase only and next by checking if there is an mactch between them:<br/>
<strong><pre>if (strtolower($email_arr[1] == "thedomainwewant.com") {
                  $to = "webmaster@example.com";
                } else {
                  $to = "support@example.com";
                }
          </pre>
  </strong>
