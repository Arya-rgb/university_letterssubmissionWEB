<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<link rel="stylesheet" href="<?php echo base_url('assets/css/login_admin.css'); ?>">
<body>
    <div class="kotak_login">
	 <p class="tulisan_login">Silahkan Masukan Username dan Password anda</p>
	<form action="<?php echo base_url('index.php/ajuan/login_aksi'); ?>" method="post">		
				<label>Username</label>
				<input type="text" name="username" class="form_login" placeholder="Username" required>
			
				<label>Password</label>
				<input type="password" name="password" class="form_login" placeholder="Password" required>
			
                <input type="submit" class="tombol_login" value="Login">
        <br/>
		<br/>
		<center>
			<a class="link" href="http://localhost/miniproject/index.php/ajuan/index">kembali</a>
		</center>
    </form>
    </div>
</body>
</html>