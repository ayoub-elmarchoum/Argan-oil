<?php 
$postData = $statusMsg = $valErr = ''; 
$status = 'error'; 
 
$valE = array();

if(isset($_POST['Submit2'])){ 
   
    $postData  = array_map('trim', $_POST); 
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    function test_input($data) {
        $data = trim($data);                // Remove leading and trailing whitespace
        $data = stripslashes($data);        // Remove backslashes
        $data = htmlspecialchars($data);    // Convert special characters to HTML entities
        return $data;
    }
    
    //  Email Validation
    if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
        $valE['email'] = 'Please enter a valid email.';
    } else {
        try {
            require_once("config.php");
            $db=connectDb();
            $req = $db->prepare("INSERT INTO newsletter (email) VALUES (:email)");
            
            $req->bindParam(':email', $email);
        
            $req->execute();
            // $statusMsg = 'Thank you! Your contact request has been submitted successfully.';
            // echo "Data inserted successfully";
            $valE['email'] = 'Thank you! Your contact request has been submitted successfully.';
            
        } catch (PDOException $e) {
            $statusMsg = 'Email could not be sent. Please try again later.';
            echo "Error: " . $e->getMessage();
        }
    }
}
?>