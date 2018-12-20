<?php
session_start();
if(isset($_SESSION['randomWord']))
	$randomWord = $_SESSION['randomWord'];

/*var_dump($_POST);*/

$ok = "";$show = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$word = $_POST['captcha'];
	if($randomWord === $word){
		$ok = '<img src="up.jpg" alt="ok" style="width:100px;">';
		$show = true;
	}else{
		$ok = '<img src="down.jpg" alt="not ok" style="width:100px;"';
	}
}
?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>alpha</title>
		<style>
			img{
				border: 1px solid lightblue;
			}
			section{
				text-align: center;
			}
		</style>
	</head>
	<body>

		<section>
			<img src="captcha.php" alt="logo" title="ImagenDeSeguridad">
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
				<input type="text" name="captcha" autofocus><label for="texto"></label>
				<input type="submit">
			</form>
			<?=$ok?>

			<p>
				<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		if(isset($_POST['captcha']) && $show === false){
			if(strlen($_POST['captcha'])>0){
				print "<br>Escribiste: ".$_POST['captcha'];
			}
			print "<br>Anterior: ".$_SESSION['randomWord'];
			unset($_SESSION['randomWord']);
		}
	}
				?>
			</p>
		</section>

	</body>
</html>
