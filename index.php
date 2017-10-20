		
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    // $from = 'From: TangledDemo'; 
    $to = 'marcoprincipio@hotmail.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
            
    $body = "From: $name\n E-Mail: $email\n Phone Number: $number\n Message:\n $message";
                
    if ($_POST['submit'] && $human == '4') {                 
        mail ($to, $subject, $body)  
        echo '<p>Your message has been sent!</p>';
     
        
    } 
     else if ($_POST['submit'] && $human != '4') {
    echo '<p>You answered the anti-spam question incorrectly!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
?>
				