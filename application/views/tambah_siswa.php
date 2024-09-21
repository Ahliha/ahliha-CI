<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/tambah_siswa.css')?>">
    <title>Tambah Siswa</title>
</head>
<body>
    
    <H1>Tambah Data Siswa</H1>

    <form action="Tambah_siswa/tambah" method="get"></form>
        <input placeholder="masukan nama" type="text" name="nama">
        <br><br>
    <select name="Alamat">

        <option value="">--Pilih Alamat--</option>
        <option value="Batang">Batang</option>
        <option value="Pekalongan">Pekalongan</option>
        <option value="Pemalang">Pemalang</option>
        <option value="Tegal">Tegal</option>
        </select>
        <br><br>
        <input placeholder="masukan no telp" type="text" name="no_telp">
        <br><br>


    <input type="submit" value="SIMPAN">
</form>
</body>
</html>