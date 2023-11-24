<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Buku</title>
</head>
<body>
    <h3>Stok Buku</h3>

    <table border="1">
        <tr>
            <th>No</th>
            <th>judul_buku</th>
            <th>stok</th>
        </tr>

        <?php
            include "koneksi.php";

            $no = 1;
            $ambildata = mysqli_query($koneksi, "SELECT * FROM buku");
            while ($tampil = mysqli_fetch_array($ambildata)) {
                echo "
                <tr>
                    <td>$no</td>
                    <td>$tampil[judul_buku]</td>
                    <td>$tampil[stok]</td>
                </tr>";
                $no++;
            }
        ?>

    </table>

    <?php
    include "koneksi.php";

    if (isset($_GET['judul_buku'])) {
        $judul_buku = $_GET['judul_buku'];
        
        // Using prepared statement to avoid SQL injection
        $delete_query = "DELETE FROM buku WHERE judul_buku = ?";
        $stmt = mysqli_prepare($koneksi, $delete_query);
        mysqli_stmt_bind_param($stmt, "s", $judul_buku);
    
        if (mysqli_stmt_execute($stmt)) {
            echo "Data berhasil dihapus";
            echo "<meta http-equiv=refresh content=2;URL='stok.php'>";
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    
        mysqli_stmt_close($stmt);
    }
    ?>
</body>
</html>
