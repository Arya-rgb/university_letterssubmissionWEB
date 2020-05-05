<!DOCTYPE html>
<html>
<head>
	<title>Proses Data Surat</title>
</head>
<body>
	<center>
		<h1>Proses Data surat</h1>
		<h3>STMIK BANDUNG</h3>
	</center>
	<?php foreach($ajuan_surat as $a){ ?>
	<form action="<?php echo base_url(). 'index.php/ajuan/proses_action'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $a->id ?>">
					<input type="text" name="nama" value="<?php echo $a->nama ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim" value="<?php echo $a->nim ?>" readonly></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $a->email?>" readonly></td>
            </tr>
            <tr>
				<td>Keterangan Surat</td>
				<td><input type="text" name="kat_surat" value="<?php echo $a->kat_surat?>" readonly></td>
            </tr>
            <tr>
				<td>Jenis Surat</td>
				<td><input type="text" name="jenis_surat" value="<?php echo $a->jenis_surat?>" readonly></td>
            </tr>
            <tr>
				<td>Status Surat</td>
				<td><input type="text" name="status_surat" value="<?php echo $a->status_surat?>"></td>
            </tr>
            <tr>
				<td>Tambahkan Link Download</td>
				<td><input type="text" name="link_surat" value="<?php echo $a->link_surat?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Proses"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>