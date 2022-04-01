<?php
  Session_start();
require "./conn.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

$fname = test_input($_POST["fname"]);
$lname = test_input($_POST["lname"]);
$email = test_input($_POST["email"]);
$username = test_input($_POST["username"]);
$phoneNumber = test_input($_POST["phoneNumber"]);
$file = "";

$number = "0123456789asdfgASDFG";
$number2 = "01234567890";

$password = substr(str_shuffle($number),0,4);

$id = substr(str_shuffle($number2),0,9);

$date =  date("Y/m/d");

$lastlog = date("Y/m/d");

$body = "welcom";
$subjet = "chill";








//$retype_pass = test_input($_POST["retype_password"]);



if($fname == ""){
  header("Location:../home/front-end/register.php?message= First Name  Required");

}

if($lname == ""){
  header("Location:../home/front-end/register.php?message= Last Name  Required");

}

if($username == ""){
  header("Location:../home/front-end/register.php?message= Username  Required");

}
if($phoneNumber == ""){
  header("Location:../home/front-end/register.php?message= Phone Number Required");

}

if($email == ""){
  header("Location:../home/front-end/register.php?message= Email  Required ");

}


// if( $retype_pass == ""){
//   header("Location:../home/front-end/register.php?message=confirm password required");
// }

// if($password !== $retype_pass){
//     header("Location:../home/front-end/register.php?message=password do not match");
//}



$query = "SELECT * FROM verifiedUser where username = :username";
$sttt = $conn->prepare($query);
$sttt ->execute(
  array(
    'username' => $username
  )
);
$count = $sttt->RowCount();
if($count > 0){

  header("Location:../home/front-end/register.php?message= $username already exist ");

  exit();


};

$query = "SELECT * FROM verifiedUser where email = :email";
$sttt = $conn->prepare($query);
$sttt ->execute(
  array(
    'email' => $email
  )
);
$count = $sttt->RowCount();
if($count > 0){

  header("Location:../home/front-end/register.php?message= $email already exist ");
  exit();

}else{




try{
$sql = "INSERT INTO `verifiedUser`(`id`, `fname`, `lname`, `email`, `username`, `pass`, `phoneNumber`, `datee`,`file` ,`lastlog`)
  VALUES ('$id','$fname','$lname', '$email','$username', '$password','$phoneNumber','$date','$file','$lastlog')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";



  $to = 'maryjane@email.com';
$subject = 'Marriage Proposal';
$from = 'peterparker@email.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}


  require_once "PHPMailer/PHPMailer.php" ;
  require_once "PHPMailer/SMTP.php" ;
  require_once "PHPMailer/Exception.php" ;

  $mail = new PHPMailer();


  function sendMail($mail, $email, $fullname, $subject, $body){

    $mail -> isSMTP();
        $mail -> Host = "globaltradeprofesionalalliance.com";
        $mail -> SMTPAuth = true;
        $mail-> Username = "support@globaltradeprofesionalalliance.com";
        $mail -> password = 'Marti08139110216';
        $mail -> port = 465;
        $mail -> SMTPSecure = "ssl";


        //email settings

        $mail -> isHTML(true);
        $mail -> setfrom($email,$fullname);
        $mail -> addAddress("support@globaltradeprofesionalalliance.com");
        $mail -> subject = ("$email,($subject)");
        $mail -> Body = $body;
        $mail -> AltBody = "Please Enable HTML mail";




        if($mail->send()){
          $status = "success";
          $response = "message sent";
        }
        else{
          $status = "failed";
          $response = "something went Wrong :  <br>" .$mail -> ErrorInfo;
        }

            



  }
 
  
  
  

 




  

  


  $SESSION['id'] = $id;
  header("Location:../home/front-end/login.php ");
  



  


  

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
}







  
  


  


?>









