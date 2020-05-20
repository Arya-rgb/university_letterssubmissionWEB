<html>
<head>
	<title>Status Surat</title>
</head>
	<body>
<table style="margin:20px auto;" border="1">
<tr>
<th>No</th>
<th>Nama</th>
<th>Nim</th>
<th>Email</th>
<th>Jenis Surat</th>
<th>Keterangan Surat</th>
<th>Status Surat</th>
<th>Link Download</th>
</tr>
	<?php
$no = 1;
foreach($ajuan_surat as $a) {
	?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $a->nama?></td>
		<td><?php echo $a->nim?></td>
		<td><?php echo $a->email?></td>
		<td><?php echo $a->kat_surat?></td>
		<td><?php echo $a->jenis_surat?></td>
		<td><a>Belum Tersedia</a><?php echo $a->status_surat?></td>
		<td><a href='https://<?php echo $a->link_surat?>'>Download</a></td>		
	</tr>
<?php } ?>

		</table>
	</body>
</html>




