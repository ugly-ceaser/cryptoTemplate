<?php

//include("../../../publicScript/conn.php");



$servername = "localhost";
$username = "globvecz_martins";
$password = "Marti08139110216";

try {
  $conn = new PDO("mysql:host=$servername;dbname=globvecz_GlobalTrade", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "connections Successful";

} catch(PDOException $e) {
  // echo "Connection failed: " . $e->getMessage();
}

$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);










function getUsers($conn)
{
    $query = "SELECT * FROM verifiedUser";
    $result = $conn->prepare($query);
    $result->execute();

    return $result->fetchAll();
}

function getAmount($conn, $type)
{
    $query = "SELECT SUM(amount) as amount FROM GeneralAccount WHERE trxType = ?";
    $result = $conn->prepare($query);
    $result->execute([$type]);

    return $result->fetch()['amount'];
}

function getAmountPending($conn)
{
    $query = "SELECT SUM(amount) as amount FROM GeneralAccount WHERE trxStatus = ?";
    $result = $conn->prepare($query);
    $result->execute(["pending"]);

    return $result->fetch()['amount'];
}

function pendingTransact($conn, $type)
{
    $query = "SELECT * FROM GeneralAccount WHERE trxType = ? AND trxStatus = ?";
    $result = $conn->prepare($query);
    $result->execute([$type, "pending"]);

    return $result->fetchAll();
}


function getUser($conn, $id)
{
    $query = "SELECT * FROM verifiedUser WHERE id = ?";
    $result = $conn->prepare($query);
    $result->execute([$id]);

    return $result->fetch();
}

