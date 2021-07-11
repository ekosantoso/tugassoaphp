<?php

require "connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $reponse = array();
    $user = $_POST['user'];

    $sql = "select * from tv where user like '$user' order by id desc limit 1";

    $result = mysqli_fetch_array(mysqli_query($con, $sql));

    if(isset($result)){


        $provider = $result['provider'];
        $nopelanggan = $result['nopelanggan'];
        $date = $result['date'];

        $response['value'] = 1;
        $response['message'] = "Pembayaran terakhir pada $date, dengan provider $provider, dan nomor pelanggan $nopelanggan .";
        echo json_encode($response);
    }
    else{
        $response['value'] = 0;
        $response['message'] = "Belum ada history transaksi!";
        echo json_encode($response);
        }
    }

?>