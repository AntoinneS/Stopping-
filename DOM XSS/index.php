<?php
function _e($string) { // Function to mitigate Xss attacks
	echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
<title> Computer Security </title>
</head>
<body>
<h1 align="center"> Computer Security Project</h1>
<table align="center">
<tr><td>
<form action="index.php" method="get" id = "search">

	<input type="text" name="search" placeholder="search"/>
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
	echo _e(" Sorry No Results Found!");
}
?>
</p>

<h3 align="center"> XSS Attacks </h3>
<div class = "container">
	<div class = "alert alert-error">
		<div align = "center">
			<b> Cyber Security</b>
		</div>
	</div>
	<h1 algin = "center"> </h1>
	<h2> DOM XSS Demo</h2>
	<b><div id= "result"> Fail </div> </b>
	<script>
	var num =document.URL.split("num=") [1];
	document.getElementById("result").innerHTML = eval (num);
	</script>
	<p>
		<ol>
			<li>Exploit the DOM XSS</li>
		</ol>
	</p>
</div>
</body>
</html>
