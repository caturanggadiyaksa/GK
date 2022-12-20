<?php

//SELECT * FROM `user` WHERE 1

include_once("../server/connection.php");

if(isset($_POST['Submit'])){
   
    $cari = $_POST['cari'];

    $nim = mysqli_query($conn, "SELECT * FROM `user` WHERE `Nim` like '%".$cari."%'");
    $nama = mysqli_query($conn, "SELECT * FROM `user` WHERE `Nama` like '%".$cari."%'");


    if (mysqli_num_rows($nim) > 0 || mysqli_num_rows($nama) > 0) {
        // Output data of each row
        while($row = mysqli_fetch_assoc($nim)) {
            $nimUser = $row["Nim"];
            // echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
        } 

        $_SESSION['Nim'] = $cari;
        header('location: ../profil.php');
    } else {
        header('location: ../index.php?status=gagal');
    }


    // if($nim || $nama) {
       
    //     header('location: ../profil.php?nama="'.$nama.'');
    // } else {
    //     header('location: ../index.php');
    // }
    
} else {
    die("akeses dilarang");
}




?>