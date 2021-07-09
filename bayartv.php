<?php

require "connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $reponse = array();
    $user = $_POST['user'];
    $provider = $_POST['provider'];
    $nopelanggan = $_POST['nopelanggan'];
    $date = date("d-m-Y");

    $sql = "INSERT INTO tv (user,provider,nopelanggan,date) VALUES ('$user','$provider','$nopelanggan','$date')";

   // $result = mysqli_fetch_array(mysqli_query($con, $sql));
        //echo $sql;
    if($con->query($sql)==TRUE){
   //if(isset($result)){
        $response['value'] = 1;
        $response['message'] = 'Pembayaran berhasil!';
        echo json_encode($response);

    }
    else{
        $response['value'] = 0;
        $response['message'] = "Pembayaran gagal!";
        echo json_encode($response);
        }
    }

?>