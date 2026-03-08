<?php
$sleepTime = 10;
if (isset($_GET['s'])) {
  $sleepTime = $_GET['s'];
}
sleep($sleepTime);
?>
<h1>Loaded!</h1>
