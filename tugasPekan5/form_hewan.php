<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div>
    <br>
<form method="post" action="proses.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Hewan</label> 
    <div class="col-8">
      <input id="text1" name="nama" placeholder="Masukan nama hewan" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="makanan" class="col-4 col-form-label">Jenis Makanan</label> 
    <div class="col-8">
      <input id="text" name="makanan" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>