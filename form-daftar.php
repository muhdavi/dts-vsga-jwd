<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form Pendaftaran Siswa Baru | Digital Talent</title>
</head>
<body>
<h2>Formulir Pendaftaran Siswa Baru</h2>
<form action="create.php" method="POST">
    Nama: <input type="text" name="nama"> <br/>
    Alamat: <textarea name="alamat"></textarea> <br/>
    Jenis Kelamin: <input type="radio" name="jenis_kelamin" value="1"> Laki-laki
    <input type="radio" name="jenis_kelamin" value="0"> Perempuan <br/>
    Agama: <select name="agama">
        <option>--Pilih Agama--</option>
        <option>Islam</option>
        <option>Kristen</option>
        <option>Hindu</option>
        <option>Budha</option>
    </select> <br/>
    Sekolah Asal: <input type="text" name="sekolah_asal"> <br/>
    <button type="submit">Daftar</button>
    <a href="index.php">Batal</a>
</form>
</body>
</html>
