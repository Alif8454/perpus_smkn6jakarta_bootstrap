<?php 
$db = mysqli_connect("localhost","root","","perpus_smkn6_jakarta");

function query($query){
    global $db;
    $result = mysqli_query($db,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $db;
    $No = htmlspecialchars($data["No"]);
    $judul_buku = htmlspecialchars($data["judul_buku"]);
    $stok = htmlspecialchars($data["stok"]);

    $query = "INSERT INTO perpus_smkn6_jakarta VALUES('','$No','$judul_buku','$stok')";
    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}

?>