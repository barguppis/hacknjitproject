<title>notAutoEnum Web</title>
<h1>This is the index page</h1>

<p><a href="/subdomains.php">Enumerate subdomains with wfuzz / sublist3r</a></p>
<p><a href="/nmap.php">Scan Found Hosts with Nmap</a></p>
<p><a href="/eyewitness.php">Pull images from the front page of webpages of found hosts</a></p>
<p><a href="/responder.php">LLMNR/NBT-NS Poisoning w/ Automatic Password cracking</a></p>
<p><a href="/about.php">About Us / Credit to tools used</a></p>
<p><a href="/install.php">Install necessary Dependencies</a></p>
<form action="/index.php" method="post">
	<input type="submit" name="exit" value="exit"/>
</form>












<img src="/images/hacknjit.jpg" alt="This is a test">

<?php
if ($_POST['exit'] == 'exit') {
system("kill $(ps aux | grep -i php | awk '{print $2}')");
}
?>
