<style>
table {
	margin-top: 60px;
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


</style>
<div>
	<table>
		<tr>
			<th>Name</th>
			<th>Category</th>
			<th>When</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Address</th>
			<th colspan="2">Action</th>
		</tr>
		<?php foreach ($getintouch as $getintouch_item) {?>

			<tr>
				<td><?php echo $getintouch_item['name']; ?></td>
				<td><?php echo $getintouch_item['category']; ?></td>
				<td><?php echo $getintouch_item['when']; ?></td>
				<td><?php echo $getintouch_item['phone']; ?></td>
				<td><?php echo $getintouch_item['email']; ?></td>
				<td><?php echo $getintouch_item['address']; ?></td>
				<td><a href="<?php echo base_url('getintouch/edit/'.$getintouch_item['id']) ?>">Edit</a></td>
				<td><a href="<?php echo base_url('getintouch/delete/'.$getintouch_item['id']) ?>">hapus</a></td>
			</tr>
			<?php
		}
		?>
	</table>
</div>