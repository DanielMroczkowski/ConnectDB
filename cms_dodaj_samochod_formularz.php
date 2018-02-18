<?php
session_start();
include_once 'cms_check_admin.php';

include_once 'dbconnect.php';

include_once 'cms_head.php';



//$sth  = $db->query('SELECT * FROM marki_samochodow');
//$sth->execute();
//$result = $sth->fetchAll();

//while ($row = $sth)
//  {
//  $marki .= '<option value="'.$row['id'].'">'.$row['nazwa'].'</option>';
//  }
  $marki='';
  $modele='';
  $rok_produkcji='';
  $kolor='';
  $ilosc_drzwi='';
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      $stmt = $db->query('SELECT * FROM marki_samochodow');
      foreach($stmt as $row)
      {
          $marki .= '<option value="'.$row['id'].'">'.$row['nazwa'].'</option>';
      }
      $stmt->closeCursor();

	  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      $stmt = $db->query('SELECT * FROM modele_samochodow');
      foreach($stmt as $row)
      {
          $modele .= '<option value="'.$row['id'].'">'.$row['nazwa'].'</option>';
      }
      $stmt->closeCursor();
//$query = 'SELECT * FROM modele_samochodow';
//$result = mysql_query($query) or die("Error");
//while ($row = mysql_fetch_array($result))
//  {
//  $modele .= '<option value="'.$row['id'].'">'.$row['nazwa'].'</option>';
//  }
  
//$id_marki_samochodu = $_POST['id_marki_samochodu'];
//$id_marki_samochodu = $_POST['id_marki_samochodu'];
//$rok_produkcji = $_POST['rok_produkcji'];
//$kolor = $_POST['kolor'];
//$ilosc_drzwi = $_POST['ilosc_drzwi'];


    //$db -> exec('INSERT INTO `test` (`imie`, `email`)   VALUES( "'.$imie.'" , "'.$email.'")');

  
print '<form action="cms_dodaj_samochod.php" method="post">
		<br> Marka: <select size="1" name="id_marki_samochodu">'.$marki.'</select>
       Model: <select size="1" name="id_modelu_samochodu">'.$modele.'</select>
       Rok produkcji: <input type="text" name="rok_produkcji">
       Kolor: <input type="text" name="kolor">
       Ilosc drzwi: <input type="text" name="ilosc_drzwi">
       <br><br><input type="submit" value="Zapisz">';
	   
	   
 //$db -> exec('INSERT INTO `samochody` (`rok_produkcji`, `kolor`,`ilosc_drzwi`)   VALUES( "'.$rok_produkcji.'" , "'.$kolor.'","'.$ilosc_drzwi.'")');
 
 
print '</body></html>';       

?>
