<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<?php
include '../classes/database.php';
$db = new database();
?>

<h3>Edit Data Mahasiswa</h3>
<form action="proses_mhs.php?aksi=update" method="post">
    <?php
    foreach ($db-> edit_mhs ($_GET['id']) as $d) {

    ?>

        <table class="table table-striped">
            <tr>
                <td>NIM</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                    <input type="text" name="nim" value="<?php echo $d['nim'] ?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"> </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" cols="30" rows="5"><?php echo $d['alamat'] ?></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"class="btn btn-success">
                </td>
            </tr>
        </table>
    <?php
    }
    ?>
</from>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>