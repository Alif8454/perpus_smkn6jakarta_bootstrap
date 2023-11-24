<!-- Code by Alif8454
Please use 90% Zoom in desktop mode -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman Buku</title>

    <!-- Form Style -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            padding-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        h2{
            padding-top: 100px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 20px auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <!-- Form Style END -->
</head>
<body>

    <h2>Form Peminjaman Buku</h2>

    <form action="" method="POST">
        <label for="Nama">Nama</label>
        <input type="text" name="Nama" id="Nama">

        <label for="judul_buku">Judul Buku</label>
        <input type="text" name="judul_buku" id="judul_buku">

        <label for="nis">NIS</label>
        <input type="number" name="nis" id="nis">

        <label for="tanggal">Tanggal Peminjaman</label>
        <input type="date" name="tanggal" id="tanggal">

        <input type="submit" value="Simpan" name="proses">
    </form>
    
    <?php
        include "koneksi.php";

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
</body>
</html>
