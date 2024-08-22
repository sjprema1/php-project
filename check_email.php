<?php
$body = "This is a sentence and it has to find find@me.com in it"; 
$email_find = explode(' ',$body);
foreach ($email_find as $email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo $email.'<br/>';
    }
}
?>