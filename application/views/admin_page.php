
<html>
<head>
	<title>Admin Page</title>
	<style type="text/css">

.table2 {
    font-family: sans-serif;
    color: #232323;
    border-collapse: collapse;
}
 
.table2, th, td {
    border: 1px solid #999;
    padding: 8px 20px;
}
input{
		background: rgba(ffffff);
		}
input{
		border:0px; width: 100%;
		}
body {
	background: url('assets/images/back.jpg');
	color: #232323;
}

	</style>

</head>
	<body>
<center>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url('index.php/ajuan/logout'); ?>">Logout</a>
</center>

<table class="table2">

<tr>
<th>No</th>
<th>Nama</th>
<th>Nim</th>
<th>Email</th>
<th>Jenis Surat</th>
<th>Keterangan Surat</th>
<th>Status Surat</th>
<th>Link Download</th>
<th>Aksi</th>
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
		<td><input value="<?php echo $a->status_surat?>" placeholder="Belum" readonly/></td>
		<td><a href='https://<?php echo $a->link_surat?>'>Download</a></td>
		<td>
		<?php echo anchor('ajuan/proses/'.$a->id,'Proses'); ?>
        <?php echo anchor('ajuan/hapus/'.$a->id,'Hapus'); ?>
		</td>
	</tr>
<?php } ?>

		</table>
	</body>
</html>




