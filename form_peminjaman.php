<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman Buku</title>
</head>
<body>
    <h2>Form Peminjaman Buku</h2>

    <form action="" method="POST">
        <tr>
            <td width="130">Nama</td>
            <td><input type="text" name="Nama"></td>
        </tr>
        <tr>
            <td>judul_buku</td>
            <td><input type="text" name="judul_buku"></td>
        </tr>
        <tr>
            <td>nis</td>
            <td><input type="number" name="nis"></td>
        </tr>
        <tr>
            <td>tanggal Peminjaman</td>
            <td><input type="date" name="tanggal"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="proses"></td>
        </tr>
    </form>
</body>
</html>

<?php
    include "koneksi.php"; // add a semicolon here

    if(isset($_POST['proses'])){
        mysqli_query($koneksi,"insert into peminjaman set 
        nama= '$_POST[Nama]', 
        judul_buku= '$_POST[judul_buku]',
        nis= '$_POST[nis]',
        tanggal= '$_POST[tanggal]'");

        echo "Data Buku baru telah disimpan";
    }
?>

<?php
        include "koneksi.php";

        $result = mysqli_query($koneksi, "SELECT * FROM peminjaman");

        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Judul Buku</th>
                    <th>NIS</th>
                    <th>Tanggal Peminjaman</th>
                </tr>";

            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>$no</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['judul_buku']}</td>
                        <td>{$row['nis']}</td>
                        <td>{$row['tanggal']}</td>
                    </tr>";
                $no++;
            }

            echo "</table>";
        } else {
            echo "Tidak ada data peminjaman.";
        }

        mysqli_close($koneksi);
    ?>
