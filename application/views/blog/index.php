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
		<th>id</th>
		<th>Category</th>
		<th>Date</th>
		<th>Title</th>
		<th>Text</th>
		<th>Picture</th>
		<th colspan="2">Action</th>
	</tr>
	<?php foreach ($blog as $blog_item) {?>

		<tr>
			<td><?php echo $blog_item['id']; ?></td>
			<td><?php echo $blog_item['category']; ?></td>
			<td><?php echo $blog_item['date']; ?></td>
			<td><?php echo $blog_item['title']; ?></td>
			<td><?php echo $blog_item['text']; ?></td>
			<td><img src="upload/img/<?php echo $blog_item['picture']; ?>"></td>
			<td><a href="<?php echo base_url('blog/edit/'.$blog_item['id']) ?>">Edit</a></td>
			<td><a href="<?php echo base_url('blog/delete/'.$blog_item['id']) ?>">hapus</a></td>
		</tr>
		<?php
	}
	?>
</table>
</div>