 <?php

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['Email'];
    $message= $_POST['Message'];

    $to = "adarshk7355@gmail.com";
    $subject = "New Contact From Submission";
    $headers = "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Contact=Type: text/plain;
    charset=utf-8\r\n";

    if(mail ($to, $subject, $message, $headers)){
        http_response_code(200);
    echo "Email sent successfully!";
    
    
    }else{
        http_response_code(500);
        echo "Oops! Something went wrong";
        
    }


  }

  else{
    http_response_code(403);
    echo "Access denied";
}

?>