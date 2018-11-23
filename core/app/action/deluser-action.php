<?php
/**
* BookMedik
* @author evilnapsis
**/
$user = UserData::getById($_GET["id"]);
$user->del();
print "<script>window.location='index.php?view=users';</script>";

?>