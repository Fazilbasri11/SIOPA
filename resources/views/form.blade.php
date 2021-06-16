<?php
    
    //koneksi database
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "siopa";

    $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

    if(isset($_POST['bsubmit']))
        {
            
            $simpan = mysqli_query($koneksi, "INSERT INTO dataform (nim, nama, jurusan, ttl, alamat, orpil, alasan, statusform) VALUES ('$_POST[inim]', '$_POST[inama]', '$_POST[ijurusan]', '$_POST[ittl]', '$_POST[ialamat]', '$_POST[iorpil]', '$_POST[ialasan]', 'Belum Dikonfirmasi')");

            if($simpan)
            {
                echo "<script>
                            alert('Pendaftaran Sukses');
                    </script>";
            }else{
                echo "<script>
                            alert('Simpan Gagal');
                    </script>";
                }

        }

?>




<!DOCTYPE html>
<html lang="en">

<head>
    @include ('template.head')
</head>

<body>
    <nav>
        @include ('template.navlogout')
    </nav>

    <div class="page">

    <div class="container">
            
            <div class="card mt-3">
      <div class="card-header text-white text-center" style="background-color: #0C1E27;">
        <h4>Silahkan masukkan data yang Diperlukan</h4>
      </div>
      <div class="card-body " style="background-color : #0C1E27;">
        <form method="post" action="">
            <div class="form-group">

                <label>NIM</label>
                <input type="text" name="inim" class="form-control" placeholder="Masukkan NIM" required>

                <label>Nama</label>
                <input type="text" name="inama" class="form-control" placeholder="Masukkan Nama" required>

                <label>Jurusan</label>
                <select class="form-control" name="ijurusan">
                    <option>Pilih Jurusan Anda</option>
                    <option value="Matematika">Matematika</option>
                    <option value="Biologi">Biologi</option>
                    <option value="Fisika">Fisika</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Farmasi">Farmasi</option>
                    <option value="Kimia">Kimia</option>
                    <option value="Statistika">Statistika</option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                </select>

                <label>Tempat/Tanggal lahir</label>
                <input type="text" name="ittl" class="form-control" placeholder="Masukkan TTL Anda" required>

                <label>Alamat</label>
                <textarea name="ialamat" class="form-control" placeholder="Masukkan Alamat" required></textarea>

                <label>Ormawa Pilihan</label>
                <select class="form-control" name="iorpil">
                    <option>Pilih Ormawa</option>
                    <option value="BEM FMIPA">BEM FMIPA</option>
                    <option value="Barracuda">Barracuda</option>
                    <option value="ULUL AlBAB">ULUL ALBAB</option>


                </select>

                <label>alasan memilih Ormawa</label>
                <textarea name="ialasan" class="form-control" placeholder="Alasan Anda" required></textarea>
            

            </div>

                <a href="{{ route('info')}}" type="submit" class="btn btn-success" name="bsubmit">Submit</a>
            
        </form>
      </div>
    </div>


    </div>


    
    <footer>
        <p>Copyright 2021 SIOPA, Inc. Terms & Privacy</p>
    </footer>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    
</body>

</html>