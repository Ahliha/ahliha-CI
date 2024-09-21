<h1>Admin Page</h1>

<h4>Tabel Data Siswa</h4>

<a href="<?php echo base_url('Tambah_siswa') ?>">Tambahkan Siswa</a>
<link rel="stylesheet" href="<?php echo base_url('assets/admin.css')?>">

<div class="main-content">
    <table class="tabel-siswa" border="1">
    <tr>
        <th>NIS</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>NO TELP</th>
        <th colspan="2">Action</th>
    </tr>

    <?php foreach ($tb_siswa as $ssw) : ?>

        <tr>

            <td><?= $ssw['nis'] ?></td>
            <td><?= $ssw['nama'] ?></td>
            <td><?= $ssw['alamat'] ?></td>
            <td><?= $ssw['no_telp'] ?></td>
            <td>
                <a href="<?= base_url();?>Admin/edit/<?= $ssw['nis']; ?>">Edit</a>"
                <a onclick="return confirm('Benernih Mo Di Hapus??')" href="<?= base_url();?>Admin/delete/<?= $ssw['nis']; ?>">Delete</a>"
            </td>

        </tr>
    <?php endforeach; ?>
</table>
</div>