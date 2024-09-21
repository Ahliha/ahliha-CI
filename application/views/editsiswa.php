<h1>Edit Data</h1>

<form action="<?= base_url() ?>>admin/update"
    method="POST">
        <input type="hidden" name="nis" value="<?= $edit['nis'] ?>">

        <input type="text" placeholder="nama_siswa"
         name="nama_siswa" value="<?= $edit['nama'] ?>"><br><br>

        <select name="alamat">
            <option value="--Pilih Alamat--"></option>
            <?php foreach($alamat as $al) : ?>
                <?php if($al == $edit['alamat']) : ?>
                    <option value="<? $al; ?>" selected><?= $al; ?>"></option>
                <?php else : ?>
                    <option value="<?= $al; ?>"><?= $al; ?></option>
                <?php endif; ?>
        <?php endforeach; ?>
        </select>
        <br><br>
        <input type="text" placeholder="no telp siswa"
         name="no_telp" value="<?= $edit['no_telp'] ?>"><br><br>

         <input type="submit" value="Edit">
</form>
        



        