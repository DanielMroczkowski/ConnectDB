<?php
session_start();
include_once 'cms_check_admin.php';

include_once 'dbconnect.php';

include_once 'cms_head.php';


  $marki='';
  $modele='';

print '<form action="cms_dodaj_marke_model.php" method="post">
		<br> Marka: <input type="text" name="marka">'.$marki.'</select>
       Model: <input type="text" name="model">'.$modele.'</select>
       <br><br><input type="submit" value="Zapisz">';
	   
	   
 //$db -> exec('INSERT INTO `samochody` (`rok_produkcji`, `kolor`,`ilosc_drzwi`)   VALUES( "'.$rok_produkcji.'" , "'.$kolor.'","'.$ilosc_drzwi.'")');
 
 
print '</body></html>';       

?>