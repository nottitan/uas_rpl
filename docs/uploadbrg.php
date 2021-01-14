<?php

$brg = new Barang($connection);
?>

<!-- Container -->
	<div class="container">
		<p class="lead">JOIN US!</p>
		<form class="datanya">
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label class="control-label" for="brg">Nama Barang 	:</label>
					</div>
					<div class="col" >
						<input type="text" name="brg" class="form-control" id="brg" placeholder="Nama Barang"style="font-style: italic;" required>
					</div>
				</div>	
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col">
						<label class="control-label" for="hrg">Harga 	:</label>
					</div>
					<div class="col" >
						<input type="text" name="hrg" class="form-control" id="hrg" placeholder="Harga Barang" style="font-style: italic;" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label class="control-label" for="deskripsi">Upload Barang	:</label>
					</div>
					<div class="col" >
							<input type="file" name="upload_brg" class="form-control" id="upload_brg" placeholder="Upload Barang"style="font-style: italic;" required>
					</div>
				</div>
			</div>

			<input type="submit" class="btn btn-primary" name="tambah" value="Submit"></input>
		</form>
		<?php
		if(@$_POST['tambah']){
			$brg = $_POST['brg'];
		}
		?>
	</div>