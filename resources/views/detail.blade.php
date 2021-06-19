<?php
    
    //koneksi database
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "siopa";

    $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

    $tampil = mysqli_query($koneksi, "SELECT * FROM dataform WHERE nim = '$_GET[id]'");
    $data = mysqli_fetch_array($tampil);

?>




<!doctype html>
<html lang="en">

<head>
    @include ('template.head')
</head>

<body>
    <nav>
        @include ('template.navlogout')
    </nav>

    

    <br><br><br><br><br>

    <form method="post" action="">
    <div class="card my-5 shadow ms-md-5 ms-0" style="background: #F9F9FB; border: #F9F9FB; border-radius: 6px;">

    <div class="card-body m-3" style="font-family: 'Times New Roman', Times, serif;">
                        <h3 class="card-title d-inline text-dark">BIODATA</h3><br>

                        <h4 class="card-subtitle mt-2 ">Nama &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp; : <?=$data['nama']?></h4>
                        <h4 class="card-subtitle mt-2 ">NIM  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&nbsp; : <?=$data['nim']?></h4>
                        <h4 class="card-subtitle mt-2 ">Jurusan &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; : <?=$data['jurusan']?></h4>
                        <h4 class="card-subtitle mt-2 ">Tempat, Tanggal Lahir &nbsp;: <?=$data['ttl']?></h4>
                        <h4 class="card-subtitle mt-2 ">Alamat &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; : <?=$data['alamat']?></h4>
                        <h4 class="card-subtitle mt-2 ">Organisasi &emsp;&emsp;&emsp;&emsp;&emsp;: <?=$data['orpil']?></h4>
                        <h4 class="card-subtitle mt-2 ">Alasan Memilih masuk : <?=$data['alasan']?></h4>

                        <br>
                        <label>Status</label>
                        <select class="form-control" name="istatus" >
                            <option><?=$data['statusform']?></option>
                            <option value="Diterima">Terima</option>
                            <option value="Tidak Diterima">Tidak Diterima</option>

                            <?php if($data['statusform'] == 'Diterima' || $data['statusform'] == 'Tidak Diterima') : ?>
                                <option value="Belum Dikonfirmasi">Konfirmasi Nanti</option>
                            <?php endif; ?>
                        </select>

                        <br>
                        <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
                        <a class="btn btn-danger" href="adminhome.php">Batal</a>

  
                    </div>
                </div>
            </form>

    <footer>
        @include('template.footer')
    </footer>

    <!-- Trigger the modal with a button -->
    <!-- Modal -->
    @include('template.modal')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>


</html>