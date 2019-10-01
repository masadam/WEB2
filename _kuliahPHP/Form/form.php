<!DOCTYPE html>

<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Form</title>
	</head>

	<body>
		
	    <div class="container">
	      <form action="tujuan.php" method="POST">

	        <div class="form-group">
	          <label >Nama</label>
	          <input type="text" name="nama" class="form-control" placeholder="...">
	        </div>

	        <div class="form-group">
	          <label>Kontak</label>
	          <input type="number" name="kontak" class="form-control" placeholder="...">
	        </div>

	        <div class="form-group">
	          <label>Jenis Kelamin</label>
	          <select name="gender" class="form-control">
	            <option value="L">Laki - laki</option>
	            <option value="P">Perempuan</option>
	          </select>
	        </div>

	        <div class="form-group">

	          <label>Minat</label>

	          <div class="form-check">
	            <input type="checkbox" class="form-check-input" name="programming">
	            <label class="form-check-label">Programming</label>
	          </div>

	          <div class="form-check">
	            <input type="checkbox" class="form-check-input" name="networking">
	            <label class="form-check-label">Networking</label>
	          </div>

	          <div class="form-check">
	            <input type="checkbox" class="form-check-input" name="multimedia">
	            <label class="form-check-label">Multimedia</label>
	          </div>

	        </div>

	        <div class="form-group">
	          <label>Kewarganegaraan</label>
	          <div class="form-check">
	            <input type="radio" class="form-check-input" name="kewarganegaraan" value="WNI">
	            <label class="form-check-label">WNI</label>
	          </div>

	          <div class="form-check">
	            <input type="radio" class="form-check-input" name="kewarganegaraan" value="WNA">
	            <label class="form-check-label">WNA</label>
	          </div>

	        </div>

	        <button type="submit" class="btn btn-primary">Submit</button>

	      </form>
	    </div>

	</body>

</html>