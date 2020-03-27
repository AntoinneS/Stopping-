<?php
function _e($string) { // Function to mitigate Xss attacks
	echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html>
<title> Computer Security </title>
<body>
<h1 align="center"> Computer Security Project</h1>
<table align="center">
<tr><td>
<form action="index.php" method="get">
	<input type="text" name="search" placeholder="search" />
	<input type="submit" value="Search" />
</form>
</td></tr>
</table>
<br />
<br />
<p align="center">
<?php
if(isset($_GET["search"]))
{
	echo _e("The results of your search for: ".$_GET["search"]);
	echo _e("Sorry No Results Found!");
}
?>
</p>
<h3 align="center"> XSS Attacks </h3>
</body>
</html>
