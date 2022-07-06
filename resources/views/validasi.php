<?php
    session_start();
    //deklarasi variabel
    $hobi_error = "";
    $_error = "is required";
    $check_hobi1 = $check_hobi2 = $check_hobi3 = "";


    // validasi
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION["nama"] = $_POST["nama"];
        $_SESSION["nim"] = $_POST["nim"];
        $_SESSION["nohp"] = $_POST["nohp"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["ttl"] = $_POST["ttl"];
        $_SESSION["gender"] = $_POST["gender"];
        $_SESSION["alamat"] = $_POST["alamat"];
        if(empty($_POST["Hobi"])){
            $hobi_error = "Hobi  " . $_error;
        }
        else {
            foreach($_POST["Hobi"] as $hobi){
                if(!empty($hobi) && $hobi == "Futsal"){
                    $check_hobi1 = $_check;
                }
                if(!empty($hobi) && $hobi == "Sepak Bola"){
                    $check_hobi2 = $_check;
                }
                if(!empty($hobi) && $hobi == "Basket"){
                    $check_hobi3 = $_check;
                }
            }
            $_SESSION["Hobi"] = $_POST["Hobi"];
        }
            // post
    header("Location: outputTugas3.php");
    exit();
    }
