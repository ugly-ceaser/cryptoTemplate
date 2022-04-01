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


//user profile details


//     $stmtfname = $conn->prepare("SELECT fname FROM verifiedUser WHERE id = :id");
//     $stmtfname ->bindValue(':id',$id);
//     $stmtfname->execute();
    
//     $fname = $stmtfname->fetchColumn();
    
    
//     $stmtlname = $conn->prepare("SELECT lname FROM verifiedUser WHERE id = :id");
//     $stmtlname ->bindValue(':id',$id);
//     $stmtlname->execute();
    
//     $lname = $stmtlname->fetchColumn();
    
    
//     $stmtmail = $conn->prepare("SELECT email FROM verifiedUser WHERE id = :id");
//     $stmtmail ->bindValue(':id',$id);
//     $stmtmail ->execute();
    
//     $email = $stmtmail->fetchColumn();


//     $stmtusername = $conn->prepare("SELECT username FROM verifiedUser WHERE id = :id");
//     $stmtusername ->bindValue(':id',$id);
//     $stmtusername->execute();
    
//     $username = $stmtusername->fetchColumn();
    
    
//     $stmtphone = $conn->prepare("SELECT phoneNumber FROM verifiedUser WHERE id = :id");
//     $stmtphone ->bindValue(':id',$id);
//     $stmtphone->execute();
    
//     $phone = $stmtphone->fetchColumn();

//     $userdit = [
//         "firname" => $fname,
//         "latsname" =>$lname,
//         "email" =>$email,
//         "phone" => $phone,
//         "username" =>$username];
        
//         if(isset($_POST[''])){

//             $newfname = $_POST['fname'];
//             $newlname = $_POST['lname'];
//             $newemail = $_POST['email'];
//             $newphone = $_POST['phone'];

//             if($newfname !== ""){

//                 $fnameUpdate = $conn->prepare("UPDATE verifiedUser  SET fname = :fname WHERE id = :id");
//                 $fnameUpdate->execute( array(':fname' => $newfname,':id' => $id));
            

//             }

//             if($newlname !==  ""){
//                 $lnameUpdate = $conn->prepare("UPDATE verifiedUser  SET lname = :lname WHERE id = :id");
//                 $lnameUpdate->execute( array(':fname' => $newlname,':id' => $id));

//             }

//             if($newemail !==  ""){
//                 $emailUpdate = $conn->prepare("UPDATE verifiedUser  SET email = :email WHERE id = :id");
//                 $emailUpdate->execute( array(':email' => $newEmail,':id' => $id));

//             }

//             if($newphone !==  ""){
//                 $phoneUpdate = $conn->prepare("UPDATE verifiedUser  SET phoneNumber = :phoneNumber WHERE id = :id");
//                 $phoneUpdate->execute( array(':phoneNumber' => $newphone,':id' => $id));

//             }
           




   
    
    

    

    

//     function saveFile ($destination, $file) {
//         if($file['error']) return false;
    
//         $filename = $file['name'];
//         $extension = pathinfo($filename, PATHINFO_EXTENSION);
//         $time = time();
    
//         $main_file = $file['tmp_name'];
//         $new_filename = "$filename-$time.$extension";
    
//         return move_uploaded_file($main_file, $destination.$new_filename);
//     }
    
//     saveFile("./uploads/", $_FILES['image']);
// }



        


   
  










// //userwallet details

//             $stmtfwallet = $conn->prepare("SELECT walletName FROM userAccount WHERE id = :id");
//             // $stmtfwallet ->bindValue(':id',$id);
//             $stmtfwallet->execute([
//                 'id' => $id,
//             ]);

//             $walletName = $stmtfwallet->fetchColumn();


//             $stmtaddress = $conn->prepare("SELECT walletaddress FROM userAccount WHERE id = :id");
//             // $stmtaddress ->bindValue(':id',$id);
//             $stmtaddress->execute([
//                 'id' => $id
//             ]);

//             $walletaddress = $stmtaddress->fetchColumn();


//             $stmtcurrency = $conn->prepare("SELECT cryptoCurrency FROM userAccount WHERE id = :id");
//             // $stmtcurrency ->bindValue(':id',$id);
//             $stmtcurrency->execute([
//                 'id' => $id
//             ]);

//             $cryptoCurrency = $stmtcurrency->fetchColumn();


//             $stmtnet = $conn->prepare("SELECT cryptonet FROM userAccount WHERE id = :id");
//             // $stmtnet ->bindValue(':id',$id);
//             $stmtnet ->execute([
//                 'id' => $id,
//             ]);

//             $cryptonet = $stmtnet->fetchColumn();

//             $accountdit = [
//                 "wallet name" => $walletName,
//                 "wallet address" => $walletAddress,
//                 "crpytoCurrency" => $crpytoCurrency,
//                 "crypto network" => $cryptonet

//             ];

            
        
        
//     $UpdateWalletName = $conn->prepare("UPDATE userAccount  SET walletName = :walletName WHERE id = :id");
//     $UpdateWalletName->execute( array( 'walletName' => $newWalletName, 'id' => $id ));



//     $UpdateWalletaddress = $conn->prepare("UPDATE userAccount  SET walletaddress = :walletaddress WHERE id = :id");
//     $UpdateWalletaddress->execute(array('walletaddress' => $newWalletAddress,'id' => $id));




//     $Updatecrypto = $conn->prepare("UPDATE userAccount SET cryptoCurrency = :crpytoCurrency WHERE id = :id");
//     $Updatecrypto->execute(  array(  'crpytoCurrency' => $newcrpytoCurrency, 'id' => $id) );






//      $Updatenet = $conn->prepare("UPDATE userAccount  SET crpytonet = :crpytonet WHERE id = :id");
//      $Updatenet->execute( array( 'crpytonet' => $newcrpytonet, 'id' => $id));


//     $passwordUpdate = $conn->prepare("UPDATE verifiedUser  SET pass = :pass WHERE id = :id");
//     $passwordUpdate->execute( array('pass' => $newPass,'id' => $id ));












    


      








?>