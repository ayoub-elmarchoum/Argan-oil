<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// Google reCAPTCHA API key configuration 
$siteKey     = '6LcR3ZonAAAAAAVIYxkIGFVaUvGf4CqIo_nqh_so'; 
$secretKey     = '6LcR3ZonAAAAAPF7jVtkzx-CgfL3qgDwVV9Y6M0X'; 
 
// Email configuration 
$toEmail = 'arganoil.sidighanem@gmail.com'; 
$fromName = 'Oriental Group'; 
$formEmail = 'arganoil.sidighanem@gmail.com'; 
 
$postData = $statusMsg = $valErr = ''; 
$status = 'error'; 
 
$valE = array();

if(isset($_POST['Submit'])){ 
   
    $postData  = array_map('trim', $_POST); 
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $phone = preg_replace('/[^0-9]/', '', $_POST['phone']);
     
    function test_input($data) {
        $data = trim($data);                // Remove leading and trailing whitespace
        $data = stripslashes($data);        // Remove backslashes
        $data = htmlspecialchars($data);    // Convert special characters to HTML entities
        return $data;
    }
    // Name validation
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $valE['name'] = "Only letters and white space allowed";
    }elseif (empty($name)) {
         $valE['name'] = 'Please enter your name.';
     } 
    // Subject Validation
     $subject = test_input($_POST["subject"]);
    if (!preg_match("/^[a-zA-Z0-9-' ]*$/", $subject)) {
        $valE['subject'] = "Only letters, numbers, and white space allowed";
    } elseif (empty($subject)) {
        $valE['subject'] = 'Please enter your subject.';
    }
    // Phone Validation
    if (empty($_POST['phone'])) {
        $valE['phone'] = 'Phone number is required.';
    } elseif (!preg_match('/^[0-9]{10}$/', $_POST['phone'])) {
        $valE['phone'] = 'Invalid phone number. Please enter a 10-digit number.';
    } 
    //  Email Validation
    if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
        // $valErr .= 'Please enter a valid email.<br/>'; 
        $valE['email'] = 'Please enter a valid email.';
    } 
    // Message Validation
    if (empty($message)) {
        $valE['message'] = 'Please enter the message.';
    } elseif (!preg_match('/^[A-Za-z][A-Za-z0-9+?!\/\\\\ ]*$/', $message) || strpos($message, '<') !== false || strpos($message, '>') !== false) {
        $valE['message'] = 'Please enter a valid message.';
    }
    
     
    if(empty($valErr)){ 
         
        // Validate reCAPTCHA box 
        if( !empty($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']) && 
        !empty($name) &&!empty($email) && !empty($subject) && !empty($message)
         && !empty($phone) ){ 
 
            // Verify the reCAPTCHA response 
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
             
            // Decode json data 
            $responseData = json_decode($verifyResponse); 
             
            // If reCAPTCHA response is valid 
            if($responseData->success){ 
 
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'arganoil.sidighanem@gmail.com';
            $mail->Password = 'ijymuitrscrwbvbu';
            $mail->Port =  587;
            $mail->SMTPSecure = 'tls';
            $mail->isHTML(true);
            $mail->setFrom($email, $name);
            $mail->addAddress('arganoil.sidighanem@gmail.com');
            $mail->Subject = htmlspecialchars($subject);
            $mail->Body = "Name: " . htmlspecialchars($name) . "<br>" .
                          "Email: " . htmlspecialchars($email) . "<br>" .
                          "Phone Number: " . htmlspecialchars($phone) . "<br>" .
                          "Message: " . htmlspecialchars($message);
            

              try {
                $mail->send();
                $status = 'success';
                $statusMsg = 'Thank you! Your contact request has been submitted successfully.';
                $postData = '';
            } catch (Exception $e) {
                $statusMsg = 'Email could not be sent. Please try again later.';
                // Log the error
                error_log('Email error: ' . $e->getMessage(), 0);
            }
            
        }
    }
        else{ 
            // $statusMsg = 'Please check on the reCAPTCHA box.';
            $valE['reca'] = 'Please check on the reCAPTCHA box.'; 
        } 
    }
}

