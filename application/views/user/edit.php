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
.zaqwesdxc {
	/*margin: 70px 20px 20px 20px;*/
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 20px;
}
input[type=text],input[type=number],input[type=date] ,.textarea1,input[type=email] ,select {
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
</style>
<div class="zaqwesdxc">
	<?php echo $this->session->flashdata('success');?>
	<form method="post" enctype="multipart/form-data" action="">
		<table align="center">
			<input type="hidden" name="id" value="<?php echo $user_item->id; ?>" >
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name" required placeholder="Tell Me Your Name Please..." value="<?php echo $user_item->name; ?>">
				</td>
			</tr>
			<tr>
				<td>Date Birth</td>
				<td>:</td>
				<td><input type="date" name="datebirth" value="<?php echo $user_item->datebirth; ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email" value="<?php echo $user_item->email; ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="level" value="<?php echo $user_item->level; ?>"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="reset" placeholder="Reset"></td>
				<td><input type="submit" name="simpan" value="SAVE"></td>
			</tr>
		</table>
	</form>
</div>
