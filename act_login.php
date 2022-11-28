<?php
    session_start();
    if (empty($_SESSION['username'])) {
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];

            $myfile = fopen("data.json", "r") or die("Unable to open file!");
            $credential = json_decode(fread($myfile,filesize("data.json")));
            if($data['username'] == $credential->username && ($data['password']) == $credential->password){
                $_SESSION["username"] = $data['username'];
                header('Location:dasbor.php');
            }else{
                echo"Login Gagal";
            }
            fclose($myfile);
        }else{
            echo "Email dan password Kosong";
        }
    }else{
        echo "Selamat di Dasbhord ".$_SESSION["username"].
        "<br><a href='logout.php'>Log Out</a>" ;
    }
?>