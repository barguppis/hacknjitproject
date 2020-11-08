<title>Nmap</title>
<h1>Scan Enumerated domains from file</h1>

<form action="/nmap.php" method="post">
	<label for="domain">Enter domain previously scanned with wfuzz or sublister: </label> 
	<input type="text" id="domain" name="domain"/>
	<label for="args">Enter any additional nmap arguments (optional): </label> 
	<input type="text" id="args" name="args"/>
	<input type="submit" value="Scan!"/>
</form>
<p>Scans will take some time...</p>
<?php
if(isset($_POST['domain']) and $_POST['domain'] != ""){
system("bash scripts/nmaplist.sh " . $_POST['domain'] . " " . $_POST['args']);
echo "<p>Finished!</p>";
echo '<a href="/scans/' . $_POST['domain'] . '/' . $_POST['domain'] . '.nmap">See Output</a>';
}
?>
