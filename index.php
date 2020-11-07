<title>notAutoEnum Web</title>
<h1>This is the index page</h1>
<?php
echo "Php can be run directly between html tags! Php code is executed by the server not the client\n"
?>
<!--To do add a button that executes this php code system("kill $(ps aux | grep -i php | awk '{print $2})")
The button should be labeled something like, close program or exit, that's what this sytem command does, it kills the php server-->
<img src="/images/hacknjit.jpg" alt="This is a test">

// Do you know how to make like text boxes to prompt for user input? also, php is pretty great. You can
// do <?php system("./script.sh " . $_GET['argument']) ?>
// you use periods to concatenate strings in php.
// the above would run the system command ./script.sh and then whatever was sent in the "GET" request.
// for example. http://localhost:2020/index.php?argument=yeedleyeedleyeedleyee
// this would cause the system to execute "./script.sh yeedleyeedleyeedleyee"

