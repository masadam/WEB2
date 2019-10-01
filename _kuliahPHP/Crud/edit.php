<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit</title>
  </head>
  <body>
    <div class="container">
      <h1>Edit</h1>
      <form action="create.php" method="POST">

        <?php
            include 'koneksi.php';
            $query = "SELECT id_kategori, nama FROM kategori WHERE id_kategori = '$id_kategori'";
            
            if ($result = $mysqli->query($query)) {       //oop
                
               while ($row = $result->fetch_assoc()) {   //oop
                  //loop here
        ?>

        <div class="form-group">
          <label>Kategori</label>
          <input type="text" name="nama" class="form-control" placeholder="Enter kategori"
              value="<?=$row['nama']?>">
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
      </form>
    </div>
  </body>
</html>