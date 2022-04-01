<?php
session_start();
require "./conn.php";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  };

 

  

    $username = test_input($_POST["username"]);
    $password = test_input($_POST["pass"]);


  if ($username !== "" && $password !== ""){
    
                $query = "SELECT * FROM adminDetails WHERE username = :username AND pass = :pass";
        
                  $stt = $conn->prepare($query);
                  $stt->execute(
                      array(
                          'username'=>$username ,
                          
                          'pass'=>$password
                      )
                  );
                  $count = $stt->rowCount();
                  if($count > 0) {

                
                    
                    $_SESSION["username"] = $username;
                    
                    header("Location:../profiles/user_profile");
                }else{
                    header("Location:../home/front-end/login.php?message= Username Or Password Does Not Exist");


                }

    
  }
  else{
      echo "lost again";
  }
  

    








