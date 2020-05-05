
<html>
<head>
	<title>Admin Page</title>
</head>
	<body>
<center>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url('index.php/ajuan/logout'); ?>">Logout</a>
</center>

<table style="margin:20px auto;" border="1">

<tr>
<th>No</th>
<th>Nama</th>
<th>Nim</th>
<th>Email</th>
<th>Keterangan Surat</th>
<th>Jenis Surat</th>
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
		<td>
		<?php echo anchor('ajuan/edit/'.$a->id,'Proses'); ?>
        <?php echo anchor('ajuan/hapus/'.$a->id,'Hapus'); ?>
		</td>
	</tr>
<?php } ?>

		</table>
	</body>
</html>




