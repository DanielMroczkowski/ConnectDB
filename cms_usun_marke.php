<?php
session_start();
include_once 'cms_check_admin.php';
include_once 'dbconnect.php';
$do_usun=$_GET['id'];
//$query = "DELETE FROM samochody WHERE id=".$_GET['id'];
$db->exec('DELETE FROM `marki_samochodow` WHERE  id =   "'.$do_usun.'"  ');
//$result = mysql_query($query) or die("Error");
print "<center>Operacja wykonana poprawnie<br><a href=\"cms_usun_marka_model_formularz.php?szukaj=\">Powrot</a>";

?>