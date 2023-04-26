<?php
$nim = $_GET['nim'];
include "koneksi.php";

$qry = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);

?>

<form action="update.php" method="POST">
        <fieldset>
            <legend>Form edit data mahasiswa</legend>
            <h2>Lengkapi biodata dengan benar</h2>
            <table>
                <tr>
                    <td>NIM (Nomor induk mahasiswa)</td>
                    <td>:</td>
                    <td><input type="number" name="nim" value="<?= $data['nim'] ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?= $data['nama_mhs'] ?>"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan">
                            <option value="001">Sistem Komputer</option>
                            <option value="002">Sistem Informasi</option>
                            <option value="003">Teknologi Informasi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                        <?php
                            if($data['gender'] == 1) {
                        ?>
                            <input type="radio" name="gender" value="1" checked> laki-laki
                            <input type="radio" name="gender" value="2"> Perempuan
                        <?php } else { ?>
                            <input type="radio" name="gender" value="1"> laki-laki
                            <input type="radio" name="gender" value="2" checked> Perempuan
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" value="<?= $data['alamat'] ?>"></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="text" name="nohp" value="<?= $data['no_hp'] ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" value="<?= $data['email'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </fieldset>
    </form>