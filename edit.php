<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the data for editing
    $edit_query = "SELECT * FROM peminjaman WHERE id = ?";
    $stmt = mysqli_prepare($koneksi, $edit_query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // You can return the data as JSON or HTML form, depending on your needs
        echo json_encode($row);
    } else {
        echo "Data not found";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($koneksi);
?>
