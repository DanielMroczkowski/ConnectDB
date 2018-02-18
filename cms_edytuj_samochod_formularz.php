<?php
session_start();
include_once 'cms_check_admin.php';

include_once 'dbconnect.php';

include_once 'cms_head.php';

/*
foreach($db->query('	SELECT s.*,m.nazwa marka,md.nazwa model
						FROM samochody s 
						INNER JOIN marki_samochodow m ON s.id_marki_samochodu = m.id
						INNER JOIN modele_samochodow md ON s.id_modelu_samochodu = md.id
						WHERE m.nazwa like   "'.$_GET['szukaj'].'%"  '
				) as $row) 
{
	
	$terminy = '';
	
	foreach($db->query( 'SELECT * FROM samochody_rezerwacje WHERE id_samochodu = '.$row['id'].'  order by data_wypozyczenia') as $row2) 
	{
			  
         $terminy .= "<b>data wypozyczenia: </b>".$row2['data_wypozyczenia']."<br>  <b>data zwrotu: </b>".$row2['data_oddania']." ,<br> <b>imie i nazwisko: </b> ".$row2['imie_nazwisko']." ,  <br><b>adres: </b> ".$row2['adres']." ,<br> <b>telefon: </b> ".$row2['telefon']." <br><a href=\"cms_usun_rezerwacje.php?id=".$row2['id']."\">Usun</a><br><br>";
		 //$terminy = "<b>data_wypozyczenia: </b><br>" .$row2['data_wypozyczenia']." <br>  <b>data zwrotu:  </b><br>".$row2['data_oddania'].", <br> <b> imie i nazwisko:  </b><br>".$row2['imie_nazwisko'].", <br> <b> Adres:  </b> <br>".$row2['adres'].",<br> <b>Telefon: </b> <br> ".$row2['telefon']."<br> <a href=\"cms_usun_rezerwacje.php?id=".$row2['id']."\">Usun</a>";
    }
*/
//$result=;

//$result = mysql_query($db) or die("Error");
foreach($db->query( 'SELECT * FROM samochody WHERE id = '.$_GET['id']) as $row) 
{
	//$query2 = 'SELECT * FROM marki_samochodow';
	$marki='';
	$modele='';
	foreach($db->query( 'SELECT * FROM marki_samochodow') as $row2) 
	{
		if($row['id_marki_samochodu']==$row2['id']) 
			$zaznacz = 'selected';
		else
			$zaznacz = ''; 
		$marki .= '<option '.$zaznacz.' value="'.$row2['id'].'">'.$row2['nazwa'].'</option>';
	}
	
	//zapytanie o drugą wartość
	foreach($db->query( 'SELECT * FROM modele_samochodow') as $row2) 
	{
		if($row['id_modelu_samochodu']==$row2['id']) 
			$zaznacz = 'selected';
		else
			$zaznacz = ''; 
		$modele .= '<option '.$zaznacz.' value="'.$row2['id'].'">'.$row2['nazwa'].'</option>';
	}
	
	 print '<form action="cms_edytuj_samochod.php" method="post">
           <input type="hidden" name="id" value="'.$row['id'].'">
           <br><br>
           <br><br>Marka: <select size="1" name="id_marki_samochodu">'.$marki.'</select>
           <br>Model: <select size="1" name="id_modelu_samochodu">'.$modele.'</select>
           <br>Rok produkcji: <input type="text" name="rok_produkcji" value="'.$row['rok_produkcji'].'">
           <br>Kolor: <input type="text" name="kolor" value="'.$row['kolor'].'">
           <br>Ilosc drzwi: <input type="text" name="ilosc_drzwi" value="'.$row['ilosc_drzwi'].'">
           <br><input type="submit" value="Zapisz">';
}
/*
while ($row = mysql_fetch_array($result))
  {
    
    
$query2 = 'SELECT * FROM marki_samochodow';
//$result2 = mysql_query($query2) or die("Error");
while ($row2 = mysql_fetch_array($result2))
  {
  if($row['id_marki_samochodu']==$row2['id']) 
       $zaznacz = 'selected';
  else
       $zaznacz = ''; 
  $marki .= '<option '.$zaznacz.' value="'.$row2['id'].'">'.$row2['nazwa'].'</option>';
  }

$query2 = 'SELECT * FROM modele_samochodow';
$result2 = mysql_query($query2) or die("Error");
while ($row2 = mysql_fetch_array($result2))
  {
  if($row['id_modelu_samochodu']==$row2['id'])
       $zaznacz = 'selected';
  else
       $zaznacz = '';
  $modele .= '<option '.$zaznacz.' value="'.$row2['id'].'">'.$row2['nazwa'].'</option>';
  }
  
 print '<form action="cms_edytuj_samochod.php" method="post">
           <input type="hidden" name="id" value="'.$row['id'].'">
           <br><br>
           <br><br>Marka: <select size="1" name="id_marki_samochodu">'.$marki.'</select>
           <br>Model: <select size="1" name="id_modelu_samochodu">'.$modele.'</select>
           <br>Rok produkcji: <input type="text" name="rok_produkcji" value="'.$row['rok_produkcji'].'">
           <br>Kolor: <input type="text" name="kolor" value="'.$row['kolor'].'">
           <br>Ilo�c drzwi: <input type="text" name="ilosc_drzwi" value="'.$row['ilosc_drzwi'].'">
           <br><input type="submit" value="Zapisz">';

  }
  */
print '</body></html>';
//mysql_close($mysql);

?>
