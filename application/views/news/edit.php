<!DOCTYPE html>
<html>
<head>
	<title>Input Data Baru</title>
	<style type="text/css">
	input[type=button], input[type=submit], input[type=reset] {
		background-color: #4CAF50;
		border: none;
		color: white;
		padding: 16px 32px;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
	}
	div {
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
	}
	input[type=text],input[type=number], select {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}

	input[type=submit],input[type=reset] {
		width: 100%;
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	input[type=submit]:hover {
		background-color: #45a049;
	}
	textarea {
		width: 100%;
		height: 150px;
		padding: 12px 20px;
		box-sizing: border-box;
		border: 1px solid #ccc;
		border-radius: 4px;
		background-color: #ffffff;
		resize: none;
	}
</style>
</head>
<body>
	<div>
		<form method="post" enctype="multipart/form-data">
			<table align="center">
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" required placeholder="Nama Produk Anda" value="<?php echo $news_item->nama; ?>">
						<input type="hidden" name="id" value="<?php echo $news_item->id; ?>" >
					</td>
				</tr>
				<tr>
					<td>Kategori</td>
					<td>:</td>
					<td><input type="text" name="kategori" required placeholder="kategori Produk Anda" value="<?php echo $news_item->kategori ?>"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td>:</td>
					<td><input type="number" name="harga" required placeholder="Harga Produk Anda" value="<?php echo $news_item->harga ?>"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td>:</td>
					<td><input type="number" name="stok" required placeholder="Stok Produk Anda" value="<?php echo $news_item->stok ?>"></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td>:</td>
					<td><textarea name="deskripsi" placeholder="Deskripsi Produk Anda" value="<?php echo $news_item->deskripsi ?>"></textarea></td>
				</tr>
				<tr>
					<td>Gambar</td>
					<td>:</td>
					<td><input type="file" name="image"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="reset" value="Ulangi"></td>
					<td><input type="submit" name="simpan" value="Simpan"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
