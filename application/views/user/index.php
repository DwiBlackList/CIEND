<style>
table {
	margin-top: 50px;
	border-collapse: collapse;
	width: 100%;
}
th{
	background-color: green;
	color: white;
}
th, td {
	text-align: left;
	padding: 8px;
}

.qq:nth-child(even) {background-color: #f2f2f2;}
</style>


<!-- <h1><a href="input">Tambah Berita</a></h1> -->
<table>
	<tr>
		<th>Name</th>
		<th>Date Birth</th>
		<th>Email</th>
		<th>Password</th>
		<th>Level</th>
		<th colspan="2">Action</th>
	</tr>
	<?php foreach ($user as $user_item) {?>

		<tr class="qq">
			<td><?php echo $user_item['name']; ?></td>
			<td><?php echo $user_item['datebirth']; ?></td>
			<td><?php echo $user_item['email']; ?></td>
			<td><?php echo $user_item['password']; ?></td>
			<td><?php echo $user_item['level']; ?></td>
			<td>
				<a href="<?php echo base_url('user/edit/'.$user_item['id']) ?>">Edit</a>&nbsp;&nbsp;
				<a href="<?php echo base_url('user/delete/'.$user_item['id']) ?>">Delete</a>
			</td>
		</tr>
		<?php
	}
	?>
</table>
