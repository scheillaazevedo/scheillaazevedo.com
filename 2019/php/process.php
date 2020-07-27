<?php

    $to = "scheilla@scheillaazevedo.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
	$subject = $_REQUEST['subject'];
    $headers = "From: $from";
    

    $fields = array();
    $fields{"name"} = "Name";
    $fields{"email"} = "E-mail";
    $fields{"subject"} = "Subject";
    $fields{"message"} = "Message";

    $body = "Aqui está a mensagem do seu site:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

    if ($send) {
        echo 1;
    } else {
        echo 0;
    }

?>
