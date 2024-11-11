<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Biodata</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="container p-5 my-5 bg-dark text-white">
            <h2>Selamat datang</h2>
        </div>
        <div class="container p-5 my-5 border border-dark">
            <h2>Input Mahasiswa</h2>
            <form action="proses.php" method="POST">
                <div class="mb-3 mt-3">
                    <label for="nim">Nim :</label>
                    <input type="text" class="form-control" placeholder="Input Nama" name="nim" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" placeholder="Input Nama" name="nama" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="nama">Jurusan :</label>
                    <select name="jurusan" class="form-select">
                        <option value="J01">Sistem Komputer</option>
                        <option value="J02">Sistem Informasi</option>
                        <option value="J03">Teknologi Informasi</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="gener">Gender :</label><br>
                    <input class="form-check-input" type="radio" name="gender" value="1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Laki - Laki
                    </label>
                    <input class="form-check-input" type="radio" name="gender" value="0">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Perempuan
                    </label>
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat :</label>
                    <input type="text" class="form-control" placeholder="Input Alamat" name="alamat" required>
                </div>
                <div class="mb-3">
                    <label for="no_hp">No HP :</label>
                    <input type="text" class="form-control" placeholder="Input No HP" name="no_hp" required>
                </div>
                <div class="mb-3">
                    <label for="Alamat">Email :</label>
                    <input type="email" class="form-control" placeholder="Input Email" name="email" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
        <div class="container p-5 my-5 border border-dark">
            <h3>Data Mahasiswa</h3>
            <hr>
            <table class="table">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kode Jurusan</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Email</th>
                </tr>
                <?php
                    include "koneksi.php";
                    $qry = mysqli_query($con, "SELECT * FROM mahasiswa");
                    while($data = mysqli_fetch_assoc($qry)){
                ?>
                <tr>
                    <td><?= $data['nim'] ?></td>
                    <td><?= $data['nama_mhs'] ?></td>
                    <td><?= $data['kode_jurusan'] ?></td>
                    <td><?= $data['gender'] == 1 ? 'Laki-laki' : 'Perempuan' ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['no_hp'] ?></td>
                    <td><?= $data['email'] ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>