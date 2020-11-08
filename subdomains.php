<title>Enumerate subdomains</title>
<h1>Enumerate Subdomains</h1>

<form action="/subdomains.php" method="post">
	<label for="inputwfuzz">Enter domain bruteforce with wfuzz: </label> 
	<input type="text" id="inputwfuzz" name="inputwfuzz"/>
	<label for="inputsublist3r">Enter domain to search against with Sublist3r: </label> 
	<input type="text" id="inputsublist3r" name="inputsublist3r"/>
	<input type="submit" value="Scan!"/>
</form>
<?php
echo "Scans will take some time.....";
if($_POST['inputsublist3r'] != "" and $_POST['inputwfuzz'] != ""){
echo "Error: One input at a time only";
}else{
	if($_POST['inputwfuzz'] != ""){
		system("bash scripts/subdomains.sh " . $_POST['inputwfuzz']);
		echo "\nFinished!\n";
		echo '<a href="/scans/' . $_POST['inputwfuzz'] . '/' . $_POST['inputwfuzz'] . '.out">Scan Output</a>';
		}
	if($_POST['inputsublist3r'] != ""){
		system("bash scripts/sublist3r.sh " . $_POST['inputsublist3r']);
		echo "\nFinished!\n";
		echo '<a href="/scans/' . $_POST['inputsublist3r'] . '/' . $_POST['inputsublist3r'] . '.sublist3r">Scan Output</a>';
		}
	}
?>
