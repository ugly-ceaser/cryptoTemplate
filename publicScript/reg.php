<?php
  Session_start();
require "./conn.php";





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
$password = test_input($_POST["password"]);
$file = "";

$number = "0123456789asdfgASDFG";
$number2 = "01234567890";

//$password = substr(str_shuffle($number),0,4);

$id = substr(str_shuffle($number2),0,9);

$date =  date("Y/m/d");

$lastlog = date("Y/m/d");










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



  $to = $email;
$subject = 'Congrats';
$from = 'Global Trade Proffessional Alliance';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Congrats ! please Login with your username and </h1>';
$message .= '<p style="color:#080;font-size:18px;"><?= $password; ?> to complete your registration</p>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}


  



 
 
  
  
  

 




  

  


  $SESSION['id'] = $id;
  header("Location:../home/front-end/login.php ");
  



  


  

} catch(PDOException $e) {
    echo "somthing wrong with registration";
  echo $sql . "<br>" . $e->getMessage();
}
}







  
  


  


?>









