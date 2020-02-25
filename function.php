<?php
    //koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "sl1");

    function registrasi($data){
        global $conn;

        $nama = $data["nama"];
        $email = $data["email"];
        $gender = $data["gender"];
        $city = $data["city"];
        $status = $data["status"];

        //Tambah user ke database
        mysqli_query($conn, "INSERT INTO users VALUES('', '$nama', '$email', '$gender', '$city', '$status')");
        return mysqli_affected_rows($conn);
    }
?>