<title>Poisoner / Password Cracker</title>
<h1>LLMNR/NBTNS Poisoning With Responder</h1>
<p><h1>Password Cracking with hashcat</h1></p>
<p><a href="/scans/ifconfig.txt">Check your networking devices here</a></p>
<p>When poisoning, cancel the request in your browser when you wish to stop poisoning</p>

<p><form action="/responder.php" method="post">
        <label for="dev">Enter network device to listen on: </label> 
        <input type="text" id="dev" name="dev"/>
        <input type="submit" value="Begin Poisoning"/>
</form></p>

<p><form action="/responder.php" method="post">
        <label for="hashcat">Enter filename where hashes were stored: </label> 
        <input type="text" id="hashcat" name="hashcat"/>
        <input type="submit" value="Begin Cracking"/>
</form></p>

<?php
system("ifconfig > scans/ifconfig.txt");
if(isset($_POST['dev'])){
system("bash scripts/responder.sh");
}
?>
