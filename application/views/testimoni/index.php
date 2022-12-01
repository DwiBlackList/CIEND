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

.qq:nth-child(even) {background-color: #f2f2f2;}
</style>


<!-- <h1><a href="input">Tambah Berita</a></h1> -->
<table>
	<tr>
		<th>Name</th>
		<th>Text</th>
		<th>Image</th>
		<th colspan="2">Action</th>
	</tr>
	<?php foreach ($testimoni as $testimoni_item) {?>

		<tr class="qq">
			<td><?php echo $testimoni_item['name']; ?></td>
			<td><?php echo $testimoni_item['text']; ?></td>
			<td><img src="upload/img/<?php echo $testimoni_item['image']; ?>"></td>
			<td>
				<a href="<?php echo base_url('testimoni/edit/'.$testimoni_item['id']) ?>">Edit</a>&nbsp;&nbsp;
				<a href="<?php echo base_url('testimoni/delete/'.$testimoni_item['id']) ?>">Delete</a>
			</td>
		</tr>
		<?php
	}
	?>
</table>
