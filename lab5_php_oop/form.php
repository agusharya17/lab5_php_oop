<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <form method="post" action="proses.php">
        <label for="Nim">NIM:</label>
        <input type="text" id="Nim" name="Nim"><br>

        <label for="Nama">Nama:</label>
        <input type="text" id="Nama" name="Nama"><br>

        <label for="Jurusan">Jurusan:</label>
        <input type="text" id="Jurusan" name="Jurusan"><br>

        <label for="Alamat">Alamat:</label>
        <input type="text" id="Alamat" name="Alamat"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>