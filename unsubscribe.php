<?php 
if(isset($_POST['submit'])){
    $to = "nurturewatchintern1@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $message = $from . " wants to unsubscribe from our mailing list";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Unsubscribed! You will not recieve weekly emails any longer.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>