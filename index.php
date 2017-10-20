<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    $from = 'From: TangledDemo'; 
    $to = 'marcoprincipio@hotmail.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
            
    $body = "From: $name\n E-Mail: $email\n Phone Number: $number\n Message:\n $message";
                
    if ($_POST['submit'] && $human == '4') {                 
        if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        } 
    } 
    else if ($_POST['submit'] && $human != '4') {
        echo '<p>You are CLEARLY not a human.  Begone robot!</p>';
    }
?>
					
