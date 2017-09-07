<?php
    
$name = $_POST['name'];
$email = $_POST['email'];
$question = $_POST['question'];
$to = 'akh452@live.com';
$subject = "Morgan's Fitness - New Form Submission";



print_r($_POST);

echo "<br>" . $name . "<br>";
echo $email . "<br>";
echo $question;

$msg = "$name\n" . 
        "$email\n" .
        "$question";

mail($to, $subject, $msg, 'From:' . $email);

?>