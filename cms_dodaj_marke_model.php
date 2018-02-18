<?php
session_start();
include_once 'cms_check_admin.php';

include_once 'dbconnect.php';

 $db -> exec('
 INSERT INTO marki_samochodow (nazwa)
 VALUES ("'.$_POST['marka'].'")
 ');

  $db -> exec('
 INSERT INTO modele_samochodow (nazwa)
 VALUES ("'.$_POST['model'].'")
 ');
//$query = "INSERT INTO samochody (id_marki_samochodu,id_modelu_samochodu,rok_produkcji,kolor,ilosc_drzwi)
 //         VALUES (".$_POST['id_marki_samochodu'].",".$_POST['id_modelu_samochodu'].",".$_POST['rok_produkcji'].",'".$_POST['kolor']."',".$_POST['ilosc_drzwi'].")";

//$result = mysql_query($query) or die("Error");
print "<center>Operacja wykonana poprawnie<br><a href=\"cms.php?szukaj=\">Powrot</a>";


?>