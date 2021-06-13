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
            <div class="scrolld">
                <a class="scroll" href="#kolom1" role="button">Scroll Down &nbsp <i
                        class="fas fa-angle-double-down kebawah"></i></a></button>
            </div>
        </div>
        <div class="container">
            <<!-- On tables -->
<table class="table-primary">...</table>
<table class="table-secondary">...</table>
<table class="table-success">...</table>
<table class="table-danger">...</table>
<table class="table-warning">...</table>
<table class="table-info">...</table>
<table class="table-light">...</table>
<table class="table-dark">...</table>

<!-- On rows -->
<tr class="table-primary">...</tr>
<tr class="table-secondary">...</tr>
<tr class="table-success">...</tr>
<tr class="table-danger">...</tr>
<tr class="table-warning">...</tr>
<tr class="table-info">...</tr>
<tr class="table-light">...</tr>
<tr class="table-dark">...</tr>

<!-- On cells (`td` or `th`) -->
<tr>
  <td class="table-primary">...</td>
  <td class="table-secondary">...</td>
  <td class="table-success">...</td>
  <td class="table-danger">...</td>
  <td class="table-warning">...</td>
  <td class="table-info">...</td>
  <td class="table-light">...</td>
  <td class="table-dark">...</td>
</tr>
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