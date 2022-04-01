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

    //echo " $username";


  /* a */if ($username !== "" && $password !== "")
  {
    
                $query = "SELECT * FROM verifiedUser WHERE username = :username AND pass = :pass";
        
                  $stt = $conn->prepare($query);
                  $stt->execute(
                      array(
                          'username'=>$username ,
                          
                          'pass'=>$password
                      )
                  );
                  $count = $stt->rowCount();
           /* b */         if($count > 0) 
           {

            

            $lastlog = date("Y-m-d H:i:s");
            // laravel
            //
            
            $statement = $conn->prepare("UPDATE verifiedUser SET lastlog = :lastlog WHERE username = :username");
            $statement->execute(
                [
                  'lastlog' => $lastlog,
                  'username' => $username
                ]
            );

            $stmtid = $conn->prepare("SELECT id FROM verifiedUser WHERE username = :username");
            $stmtid->execute([
              'username' => $username
            ]);

            $id = $stmtid->fetch();

            $_SESSION["id"] = $id['id'];

        header("Location:../profiles/user_profile");
        }
        else{
          header("Location:http://localhost/GTPA/home/front-end/login.php");
        }

}
