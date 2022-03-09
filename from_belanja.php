<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<body>
<!-- Button trigger modal -->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin: 20px; display :flex;">
    daftar harga
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <form method="post" action="from_belanja.php">
          <h5 class="modal-title" id="exampleModalLabel"> Daftar Harga</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="col-md-8">
           <ul class="list-group" id="list" input name="list">
             <li class="list-group-item active"aria-current="true">Daftar Harga</li>
             <li class="list-group-item">Tv : 4.200.000</li>
             <li class="list-group-item">Kulkas : 3.100.000</li>
             <li class="list-group-item">Mesin Cuci : 3.800.000</li>
             <li class="list-group-item active"aria-current="true">Harga dapat berubah setiap saat</li>
</ul>
      </div>
      </div>
    </div>
  </div>
    <div class="container col-8 ">
        <div>
            <h1>Belanja Online</h1>
        </div>

       
<form>
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Radio Buttons</label> 
    <div class="col-8 ">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="nambar" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="nambar" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="nambar" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah Beli</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Masukan jumlah barang " type="text" class="form-control">

    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input name="proses" type="submit" class="btn btn-primary " value="kirim">
    </div>
  </div>
  <div>
</form>
    </div>
    
</body>
</html>


<?php
$proses = $_POST['proses'];
$customer = $_POST['customer'];
$nama_barang = $_POST['nambar'];
$jumlah_beli = $_POST['jumlah'];


echo 'proses : ' .$proses;
echo '<br/>Customer : ' .$customer;
echo '<br/>Nama barang: ' .$nama_barang;
echo '<br/> Jumlah beli : ' .$jumlah_beli;

?>
