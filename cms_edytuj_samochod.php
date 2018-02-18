<?php
session_start();
include_once 'cms_check_admin.php';

include_once 'dbconnect.php';


 $db -> exec(
"UPDATE samochody set id_marki_samochodu = ".$_POST['id_marki_samochodu'].",id_modelu_samochodu=".$_POST['id_modelu_samochodu'].",rok_produkcji=".$_POST['rok_produkcji'].",kolor='".$_POST['kolor']."',ilosc_drzwi=".$_POST['ilosc_drzwi']
." WHERE id = ".$_POST['id']);

//$result = mysql_query($query) or die("Error");
print "<center>Operacja wykonana poprawnie<br><a href=\"cms.php?szukaj=\">Powrot</a>";
//mysql_close($mysql);
?>
