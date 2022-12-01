<style>
table {
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

tr:nth-child(even) {background-color: #f2f2f2;}
</style>


<h1><a href="input">Tambah Berita</a></h1>
<table>
	<tr>
		<th>Nama</th>
		<th>Kategori</th>
		<th>Harga</th>
		<th>Stok</th>
		<th>Deskripsi</th>
		<th>Gambar</th>
		<th colspan="2">Action</th>
	</tr>
	<?php foreach ($news as $news_item) {?>

		<tr>
			<td><?php echo $news_item['nama']; ?></td>
			<td><?php echo $news_item['kategori']; ?></td>
			<td><?php echo $news_item['harga']; ?></td>
			<td><?php echo $news_item['stok']; ?></td>
			<td><?php echo $news_item['deskripsi']; ?></td>
			<td><img src="upload/img/<?php echo $news_item['image']; ?>"></td>
			<td><a href="<?php echo base_url('news/edit/'.$news_item['id']) ?>">Edit</a></td>
		</tr>
		<?php
	}
	?>
</table>
