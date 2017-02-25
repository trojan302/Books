<?php 
require_once "function.php"; 
$username = $_POST['username'];
$password = md5($_POST['password']);

if (ISSET($username) && ISSET($password))
{
	$cekuser = "select * from tbl_user where username = '$username' and password = '$password'";
	$cekuser_query = mysql_query($cekuser);
	$countuser = mysql_num_rows($cekuser_query);

	if ($countuser >= 1)
		{
			// echo "usernya ada";
			$login = 1;
			$_SESSION['login'] = $username ;
			header("location: user.php");
		}

	else
		{
			// echo "usernya tidak ada";
			$login = 0;
		}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Administrasi Mahasiswa ... </title>
		<link rel="stylesheet" href="styles.css" type="text/css" media="screen" />
	</head>
	<body>
		<div id="wrap">
		<div id="header"></div>
			<div id="menu">
				<ul>
					<?php require_once "menu.php"; ?>
				</ul>
			</div>
		<div id="content">
			<h1 class="judul">User Login :</h1>
			<?php 
			if ($_REQUEST['page'] == "login")
				{ 
					if($login == 0)
						{ 
							echo "<p class=\"redalert\">Maaf username atau password anda salah...</p>";
						}
				} 
			else
				{
					echo "<small>Silahkan isi username dan password anda untuk login...</small>";
				}
			?>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>?page=login" method="POST">
			<table border="0" width="50%">
			<tr><td>Username :</td><td><input type="text" name="username" value="<?php echo $_POST['username']?>"></td></tr>
			<tr><td>Password :</td><td><input type="password" name="password" value="<?php echo $_POST['password']?>"></td></tr>
			<tr><td></td><td><input type="submit" name="submit" value="Login!"></td></tr>
			</form>
			</table>
			<br class="clearfloat" />
		</div>
		<div id="footer">
			Developed by : ilmuwebsite.com
		</div>
	</div>
	</body>
</html>