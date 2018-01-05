<?php
session_start();
if(isset($_GET["submit"]))
{
	if ($_GET["submit"] == "OK")
	{
		$_SESSION['login']="login";
		$_SESSION['passwd']="passwd";
	}
}
?>
<html>
hello
</html>
