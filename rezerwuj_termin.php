<?php

include_once 'dbconnect.php';
 $db -> exec('
	INSERT INTO samochody_rezerwacje (id_samochodu,data_wypozyczenia,data_oddania,imie_nazwisko,adres,telefon)
	VALUES ("'.$_POST['samochod'].'","'.$_POST['data_wypozyczenia'].'","'.$_POST['data_oddania'].'","'.$_POST['imie_nazwisko'].'","'.$_POST['adres'].'","'.$_POST['telefon'].'")');

//$result = mysql_query($query) or die("Error");
print "<center>Operacja wykonana poprawnie<br><a href=\"rezerwacje.php?szukaj=\">Powrot</a>";
//mysql_close($mysql);




/*
 $db -> exec('
 

 INSERT INTO samochody (id_marki_samochodu,id_modelu_samochodu,rok_produkcji,kolor,ilosc_drzwi)

 VALUES ("'.$_POST['id_marki_samochodu'].'","'.$_POST['id_modelu_samochodu'].'","'.$_POST['rok_produkcji'].'","'.$_POST['kolor'].'","'.$_POST['ilosc_drzwi'].'")
 
 ');
*/
?>
