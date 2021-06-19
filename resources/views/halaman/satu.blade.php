<?php
    
    //koneksi database
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "siopa";

    $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

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

    

    <div class="home">
        <div class="utama">
            <h6>-----ORMAWA FMIPA USK</h6>
            <br>
            <h1>Be Prepared For The<br> FMIPA USK Organizations</h1>
            <br>
            <h5>SIOPA adalah kepanjangan dari sistem informasi organisasi fmipa, website yang memudahkan mahasiswa
                untuk
                mengetahui infomasi dari organisasi yang berada dilingkungan FMIPA.</h5>
            <br>
            <br>
            <h1 class="text-center">Badan Eksekutif Mahasiswa<br> FMIPA USK</h1>
            <br><br><br><br><br>
        
    
        </div>
        
        <!-- tabel-->
        
    <div class="cardtabel">
      <div class="card-header bg-transparent text-white text-center">
        <h4>Daftar Mahasiswa Pendaftar</h4>
      </div>
      <div class="card-body">
        <table class="table table-hover table-striped">
            <tr>
                <th class="text-center">No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Status Form</th>
                <th>&nbsp;&nbsp;&nbsp;Detail</th>
            </tr>

            <?php
                $no = 1;
                $tampil = mysqli_query($koneksi, "SELECT * from dataform order by nim");
                while($data = mysqli_fetch_array($tampil)) :

                    if ($no%2 == 0) :
                        
            ?>
                <tr>
                <td class="text-center"><?=$no++?></td>
                <td><?=$data['nim']?></td>
                <td><?=$data['nama']?></td>
                <td><?=$data['statusform']?></td>
                <td>
                    <a href="{{ route('detail')}}" class="btn btn-transparent text-dark">Lihat detail </a>
                    
                </td>
            </tr>

                    <?php else: ?>

            <tr>
                <td class="text-white text-center"><?=$no++?></td>
                <td class="text-white"><?=$data['nim']?></td>
                <td class="text-white"><?=$data['nama']?></td>
                <td class="text-white"><?=$data['statusform']?></td>
                <td>
                    <a href="{{ route('detail')}}" class="btn btn-transparent text-white"> Lihat detail </a>
                    
                </td>
            </tr>
            <?php endif;?>
        <?php endwhile; //penutup loop while ?>
        </table>

      </div>
    </div>


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