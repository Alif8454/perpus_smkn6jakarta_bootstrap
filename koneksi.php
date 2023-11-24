<?php
$koneksi = mysqli_connect("localhost", "root", "", "perpus_smkn6_jakarta");

        // Check connection
        if (!$koneksi) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // echo "Connected successfully";

        ?>