<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=GlobalTrade", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  // echo "Connection failed: " . $e->getMessage();
}

$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);



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


 if(is_int($amount)){
  $sql = "INSERT INTO `GeneralAccount` (`id`, `trxId`, `amount`, `trxType`, `trxStatus`, `walletName`, `coin`,`coinNetwork`, `datee`) 
  VALUES ('$id', '$trxId', '$amount', '$trxType', '$status', '$walletName', '$coin','$Cryptontwk', '$date');";

  $conn->exec($sql);

  header("Location:http://localhost/GTPA/profiles/user_profile/pages/reports/Deposit.php");

 }
 else{
  header("Location:http://localhost/GTPA/profiles/user_profile/pages/reports/Deposit.php");

 }

  
  
  
  

  
  
  



 

          
}





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


  if(is_int($amount)){
    $sql = "INSERT INTO `GeneralAccount` (`id`, `trxId`, `amount`, `trxType`, `trxStatus`, `walletName`, `coin`,`coinNetwork`, `datee`) 
    VALUES ('$id', '$trxId', '$amount', '$trxType', '$status', '$walletName', '$coin','$Cryptontwk', '$date');";

$conn->exec($sql);

header("Location:http://localhost/GTPA/profiles/user_profile/pages/reports/withdrawal.php");
    


  }else{
    header("Location:http://localhost/GTPA/profiles/user_profile/pages/reports/withdrawal.php");

  }
  
 


          
}











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

          header("Location:http://localhost/GTPA/profiles/user_profile/pages/reports/sent.php");

          
}

// function test_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }

if(isset($_POST['walletupdate'])){

 

  
  $id = test_input($_POST["user"]);
  $walletName = test_input($_POST["walletName"]);
  $walletAddress = test_input($_POST["walletAddress"]);
  $retype = test_input($_POST["retype_wallet"]);
  $coin = test_input($_POST["coin"]);
  $Cryptontwk = test_input($_POST["cryptontwk"]);

echo "$walletName";
echo "$walletAddress";
echo "$retype";
echo "$coin";
echo "$cryptontwk";
echo "$id";




  // if($walletAddress == $retype ){
  //   $sql = " INSERT INTO `userAccount` (`id`, `walletName`, `walletAddress`, `cryptoCurrency`, `cryptoNet`) 
  //  VALUES ('$id', '$walletName', '$walletAddress', '$coin', '$Cryptontwk')";

  //   header("Location:http://localhost/GTPA/profiles/user_profile/pages/reports/Deposit.php");

    
  // }else{
  //   header("Location:http://localhost/GTPA/profiles/user_profile/pages/reports/inbox.php");

   
  // }
  
  
}






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



  $query = "SELECT SUM(amount) AS amt FROM generalAccount WHERE id = :userId AND trxType = :trxType AND trxStatus = :trxStatus";
  $result = $conn->prepare($query);
  $result->execute([
    
    "userId" => $userId,
    "trxType" => $trxType,
    "trxStatus" => $trxStatus



]);

  return $result->fetch();
}

// function getUsersDetails($conn, $userId) {
//   $messages = getUserMessage($conn, $userId);
//   $account = getUserAccount($conn, $userId);

//   return  [
//     "message" => $messages,
//     "account" => $account,
//   ]
// }

?>