<?php





$servername = "localhost";
$username = "globvecz_martins";
$password = "Marti08139110216";

try {
  $conn = new PDO("mysql:host=$servername;dbname=globvecz_GlobalTrade", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "connections Successful";

} catch(PDOException $e) {
  // echo "Connection failed: " . $e->getMessage();
}

$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);









if(isset($_POST['user_profile'])){

      function test_input($data) {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    };

      $userid = test_input($_POST["user"]);
      $firstname = test_input($_POST['fname']);
      $lastname = test_input($_POST["lname"]);
      $email = test_input($_POST["email"]);
      $phoneNumber = test_input($_POST["phone"]);
      $package = test_input($_POST["package"]);
      $file = $_FILES["file"];
      
      
        if(!$file["file"]["error"]){
            $filename = $file["name"];
            $des = "./uploads/";
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $rand = time();
            $filename .= $rand . "." . $extension;
          
            $main_file = $file["tmp_name"];
          
            $moved = move_uploaded_file($main_file, $des.$filename);
            
            try{
    
                $sql = "UPDATE `verifiedUser` SET `fname`='$firstname', `lname`='$lastname',`email`='$email',`phoneNumber`='$phoneNumber',`package`= '$package', `profile_pic`='$filename' WHERE id = '$userid'";
    
    
                $stmt = $conn->query($sql);
    
                // execute the query
                $stmt->execute();
    
                // echo a message to say the UPDATE succeeded
                echo $stmt->rowCount() . header('Location:http://globaltradeprofessionalalliance.com/profiles/user_profile/pages/reports/member-profile.php');
            } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        }

        

    $conn = null;
        
      

 
};

  if(isset($_POST['deposit'])){

      function test_input($data) {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

      }

   
      $id = test_input($_POST["user"]);
      $trxId = test_input($_POST["trxid"]);
      $amount = test_input($_POST["amount"]);
      $trxType = "deposit";
      $status = "pending";
      $walletName = "admin";
      $coin = test_input($_POST["coin"]);
      $Cryptontwk = test_input($_POST["network"]);
      $date = date("Y/m/d");

      $sql = "INSERT INTO `GeneralAccount` (`id`, `trxId`, `amount`, `trxType`, `trxStatus`, `walletName`, `coin`,`coinNetwork`, `datee`) 
      VALUES ('$id', '$trxId', '$amount', '$trxType', '$status', '$walletName', '$coin','$Cryptontwk', '$date');";

      $conn->exec($sql);

      header("Location:https://globaltradeprofessionalalliance.com/profiles/user_profile/pages/reports/Deposit.php");
      
} ;

if(isset($_POST['withdraw'])){

        function test_input($data) {

          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;

      }

  $id = test_input($_POST["user"]);
  $trxId = "1";
  $amount = test_input($_POST["amount"]);
  $trxType = "withdraw";
  $status = "pending";
  $walletName =test_input($_POST["walletName"]);
  $coin = test_input($_POST["coin"]);
  $Cryptontwk = test_input($_POST["cryptontwk"]);
  $date = date("Y/m/d");



  $sql = "INSERT INTO `GeneralAccount` (`id`, `trxId`, `amount`, `trxType`, `trxStatus`, `walletName`, `coin`,`coinNetwork`, `datee`) 
  VALUES ('$id', '$trxId', '$amount', '$trxType', '$status', '$walletName', '$coin','$Cryptontwk', '$date');";

  $conn->exec($sql);

  header("Location:https://globaltradeprofessionalalliance.com/profiles/user_profile/pages/reports/withdrawal.php");

};

if(isset($_POST['sendMessage'])){


            function test_input($data) {

              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;

          }

  
  $senderId = test_input($_POST["senderid"]);
  $recieverId = test_input($_POST["admin"]);
  $subject = test_input($_POST["subject"]);
  $message = test_input($_POST["message"]);
  $mesgStat = test_input($_POST["messageStatus"]);
  $date = date("Y/m/d");
  



   $sql = "INSERT INTO `messages` ( `senderId`, `recieverId`, `msgSubject`, `message`, `messageStatus`, `datee`) 
          VALUES ( '$senderId', '$recieverId', '$subject', '$message', '$mesgStat', '$date')";

    $conn->exec($sql);

    header("Location:https://globaltradeprofessionalalliance.com/profiles/user_profile/pages/reports/sent.php");

          
};


if(isset($_POST['walletupdate'])){

  function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

  }

      $userId = test_input($_POST["user"]);
      $walletName = test_input($_POST["walletName"]);
      $walletAddress = test_input($_POST["walletAddress"]);
      $retyp = test_input($_POST["retype"]);
      $coin = test_input($_POST["coin"]);
      $networks = test_input($_POST["network"]);
      

          if ($retyp !== $walletAddress){
            
            
          }

        $sql = "INSERT INTO `userAccount` ( `id`, `walletName`, `walletAddress`, `cryptoCurrency`, `cryptoNet`) 
                  VALUES (:userId, :walletName, :address, :crypto, :cryptoNet )";
                  
                  $stmt = $conn->prepare($sql);

                  // execute the query
              $stmt->execute([
                  "userId" => $userId,
                  "walletName" => $walletName,
                  "address" => $walletAddress,
                  "crypto" => $coin,
                  "cryptoNet" => $networks
                ]);
                
                header("Location:https://globaltradeprofessionalalliance.com/profiles/user_profile/pages/reports/member-profile.php");
}


if(isset($_POST['pass_update'])){

  function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

};

  $userid = test_input($_POST["user"]);
  $password = test_input($_POST['password']);
  $retype = test_input($_POST["retype"]);
 

  echo $userid;
    
try{
    
      $sql = "UPDATE `verifiedUser` SET `pass`='$password' WHERE id = '$userid'";


      $stmt = $conn->prepare($sql);

      // execute the query
      $stmt->execute();

    // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . header("Location:https://globaltradeprofessionalalliance.com/profiles/user_profile/pages/reports/member-profile.php");
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
    
  


};











 


            

 
























function getUserMessage ($conn, $userId) {
  $query = "SELECT * FROM messages WHERE recieverId = ?";
  $result = $conn->prepare($query);
  $result->execute([$userId]);

  return $result->fetchAll();
}

function getUsersentMessage ($conn, $userId) {
  $query = "SELECT * FROM messages WHERE senderId = ?";
  $result = $conn->prepare($query);
  $result->execute([$userId]);

  return $result->fetchAll();
}

function getUserdit($conn, $id) {
  $query = "SELECT * FROM verifiedUser WHERE id = ?";
  $statement = $conn->prepare($query);
  $statement ->execute([$id]);
  return $statement->fetch();
}

function getUserAccount($conn, $userId) {
  $query = "SELECT * FROM userAccount WHERE id = ?";
  $result = $conn->prepare($query);
  $result->execute([$userId]);

  return $result->fetchAll();
}


function getUserDeposit($conn, $userId) {

            $trxType = "deposit";
            $trxStatus = "approved";

            $query = "SELECT SUM(amount) AS amt FROM GeneralAccount WHERE id = :userId AND trxType = :trxType AND trxStatus = :trxStatus";
            $result = $conn->prepare($query);
            $result->execute([ "userId" => $userId, "trxType" => $trxType,"trxStatus" => $trxStatus]);
             
            return $result->fetch();


}
                
            



       



?>