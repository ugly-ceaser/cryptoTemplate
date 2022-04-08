<?php

session_start();
require("../../../publicScript/conn.php");

if(isset($_POST['update'])) {
    $id = $_POST['update'];
    $amount = floatval($_POST['amount']);

    $query = "UPDATE `verifiedUser` SET `availableBalance` = ? WHERE `id` = ?";
    $result = $conn->prepare($query);
    $result->execute([$amount, $id]);

    if($result){
        header("Location: ../dashboard.php");
    }
}

if(isset($_GET["approve"])) {
    $id = $_GET["approve"];
    $status = "approved";

    $query = "UPDATE `GeneralAccount` SET `trxStatus` = ? WHERE trxId = ?";
    $result = $conn->prepare($query);
    $result->execute([$status, $id]);

    if($result) {
        header("Location: ../pages/reports/pending_requests.php");
    }

}

if(isset($_GET["decline"])) {
    $id = $_GET["decline"];
    $status = "declined";

    $query = "UPDATE `GeneralAccount` SET `trxStatus` = ? WHERE trxId = ?";
    $result = $conn->prepare($query);
    $result->execute([$status, $id]);

    if($result) {
        header("Location: ../pages/reports/pending_requests.php");
    }

}

