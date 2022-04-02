<?php 


$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=GlobalTrade", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo("connected");


} catch(PDOException $e) {
  // echo "Connection failed: " . $e->getMessage();
}

$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);



if(isset($_POST['walletupdate'])){

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    
      }

         $id = test_input($_POST["user"]);
         $walletName = test_input($_POST["walletName"]);
         $walletAddress = test_input($_POST["walletAddress"]);
         $retype = test_input($_POST["retype_wallet"]);
        $coin = test_input($_POST["coin"]);
        $Cryptontwk = test_input($_POST["network"]);
  
    //  echo "$walletName";
    //  echo "$walletAddress";
    //  echo "$retype";
    //  echo "$coin";
    //  echo "$Cryptontwk";
    //  echo "$id";


     $check = 1;
     
    if($check ===1 ){
        $sql = "INSERT INTO `userAccount` (`walletName`,`walletAddress`,`cryptoCurrency`,`cryptoNet`,`id`) 
        VALUES ('$walletName','$walletAddress','$coin','$Cryptontwk','$id');";
      
        $conn->exec($sql);
     
    




     echo"connected";
}

}






  




?>