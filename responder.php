<title>Poisoner / Password Cracker</title>
<h1>LLMNR/NBTNS Poisoning With Responder</h1>
<p><h1>Password Cracking with hashcat</h1></p>
<p><a href="/scans/ifconfig.txt">Check your networking devices here</a></p>
<p>When poisoning, cancel the request in your browser when you wish to stop poisoning</p>

<p><form action="/responder.php" method="post">
        <label for="dev">Enter network device to listen on: </label> 
        <input type="text" id="dev" name="dev"/>
        <label for="saveoutput">Enter filename to save output: </label> 
        <input type="text" id="saveoutput" name="saveoutput"/>
        <input type="submit" value="Begin Poisoning"/>
</form></p>

<p><form action="/responder.php" method="post">
        <label for="dev">Enter device you listened on: </label> 
        <input type="text" id="dev1" name="dev1"/>
        <label for="saveoutput">Enter filename you saved output to: </label> 
        <input type="text" id="savedoutput" name="savedoutput"/>
        <input type="submit" value="Spawn link"/>
</form></p>

<p><form action="/responder.php" method="post">
	<label for="dev">Enter device you listened on: </label> 
        <input type="text" id="dev2" name="dev2"/>
        <label for="hashcat">Enter filename where hashes were stored: </label> 
        <input type="text" id="hashcat" name="hashcat"/>
        <input type="submit" value="Begin Cracking"/>
</form></p>

<?php
system("ifconfig > scans/ifconfig.txt");
if(isset($_POST['dev']) and $_POST['dev'] != "" and $_POST['saveoutput'] != ""){
system("bash scripts/responder.sh " . $_POST['dev'] . " " . $_POST['saveoutput']);
echo '<p><a href="/responder/' . $_POST['dev'] . '/' . $_POST['saveoutput'] . '">View captured hashes</a></p>';
}else{
if(isset($_POST['dev'])){
echo "<p>You need to supply both arguments</p>";
}
}
?>
<?php
if(isset($_POST['dev1']) and $_POST['dev1'] != "" and $_POST['savedoutput'] != ""){
system("bash scripts/viewhashes.sh " . $_POST['dev1'] . " " . $_POST['savedoutput']);
echo '<p><a href="/responder/' . $_POST['dev1'] . '/' . $_POST['savedoutput'] . '">View captured hashes</a></p>';
}
?>
<?php
if(isset($_POST['hashcat']) and $_POST['hashcat'] != ""){
system("bash scripts/hashcat.sh " . $_POST['dev2'] . " " . $_POST['hashcat']);
echo '<p><a href="/responder/' . $_POST['dev2'] . '/' . $_POST['hashcat'] . ".hashout" . '">View cracked hashes</a></p>';
}
?>
