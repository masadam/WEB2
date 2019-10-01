<!DOCTYPE html>

<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Kalkulator</title>
	</head>

	<body>
		
	    <div class="container">
	      <form action="hitung.php" method="GET" target="_blank">

	        <div class="form-group">
	          <label >Nilai n1 :</label>
	          <input type="number" name="n1" class="form-control" placeholder="...">
	        </div>

	        <div class="form-group">
	          <label>Nilai n2 :</label>
	          <input type="number" name="n2" class="form-control" placeholder="...">
	        </div>

	        <!-- <div class="form-group">
	          <label>Operator</label>
	          <select name="operator" class="form-control">
	            <option value="+">Tambah</option>
	            <option value="-">Kurang</option>
	            <option value="*">Kali</option>
	            <option value="/">Bagi</option>
	          </select>
	        </div> -->

	        <div class="form-group">
	          <label>Operator</label>
	          <div class="form-check">
	            <input type="radio" class="form-check-input" name="operator" value="+">
	            <label class="form-check-label">+</label>
	          </div>

	          <div class="form-check">
	            <input type="radio" class="form-check-input" name="operator" value="-">
	            <label class="form-check-label">-</label>
	          </div>

	          <div class="form-check">
	            <input type="radio" class="form-check-input" name="operator" value="*">
	            <label class="form-check-label">*</label>
	          </div>

	          <div class="form-check">
	            <input type="radio" class="form-check-input" name="operator" value="/">
	            <label class="form-check-label">/</label>
	          </div>

	        </div>

	        <button type="submit" class="btn btn-primary">Submit</button>

	      </form>
	    </div>

	</body>

</html>