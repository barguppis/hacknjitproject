<title>Install Dependencies</title>
<h1>Install Dependencies</h1>
<p>Make sure you are running as the root user.</p>
<form action="/install.php" method="post">
	<input type="submit" value="Install" name="install"/>
<?php
if(isset($_POST['install'])){
system("bash scripts/install.sh > /dev/null");
system("sleep 2");
echo "<p>Install Script run successfully</p>";
}
?>
