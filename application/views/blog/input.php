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
	.qwe{
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
		margin-top: 50px; 
	}
	input[type=text],input[type=number],input[type=date], select {
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
<div class="qwe">
	<a href="index">Kembali</a> <?php echo $this->session->flashdata('success');?>
	<form method="post" enctype="multipart/form-data" action="">
		<table align="center">
			<tr>
				<td>Category</td>
				<td>:</td>
				<td>
					<select name="category">
						<option value="news">news</option>
						<option value="innovations">innovations</option>
						<option value="tips">tips</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Date</td>
				<td>:</td>
				<td><input type="date" name="date"></td>
			</tr>
			<tr>
				<td>Title</td>
				<td>:</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>text</td>
				<td>:</td>
				<td><textarea name="text"></textarea></td>
			</tr>
			<tr>
				<td>Picture</td>
				<td>:</td>
				<td><input type="file" name="picture"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="reset" placeholder="Ulangi/Reset"></td>
				<td><input type="submit" name="simpan4" value="Simpan"></td>
			</tr>
		</table>
	</form>
</div>
