<?php

include_once 'dbconnect.php';
include_once 'head.php';
print "<br><b>Rezerwuj</b><br>
       <table border=\"1\">
       <tr><td><b>Marka</td>
      <td><b>Model</td>
      <td><b>Rok produkcji</td>
      <td><b>Kolor</td>
      <td><b>Ilosc Drzwi</td>
      <td><b>Rezerwacje</td>
      </tr>";
$query = 'SELECT s.*,m.nazwa marka,md.nazwa model
         FROM samochody s inner join marki_samochodow m ON s.id_marki_samochodu = m.id
         INNER JOIN modele_samochodow md ON s.id_modelu_samochodu = md.id
         WHERE s.id = '.$_GET['samochod'];
		 
//$result = mysql_query($query) or die("Error");

//while ($row = mysql_fetch_array($result))
     // {
//      $query2 = 'SELECT * FROM samochody_rezerwacje WHERE id_samochodu = '.$row['id'].' AND data_wypozyczenia > now() order by data_wypozyczenia';
//      $result2 = mysql_query($query2) or die("Error");
      $terminy = '';
 //     while ($row2 = mysql_fetch_array($result2))
 //           {
 //             $terminy .= $row2['data_wypozyczenia']." - ".$row2['data_oddania']."<br>";
//            } 

/*
foreach($db->query('	SELECT s.*,m.nazwa marka,md.nazwa model
						FROM samochody s inner join marki_samochodow m ON s.id_marki_samochodu = m.id
						INNER JOIN modele_samochodow md ON s.id_modelu_samochodu = md.id
						WHERE m.nazwa like   "'.$_GET['szukaj'].'%"  '
				) as $row) 
*/
foreach($db->query('	SELECT s.*,m.nazwa marka,md.nazwa model
						FROM samochody s inner join marki_samochodow m ON s.id_marki_samochodu = m.id
						INNER JOIN modele_samochodow md ON s.id_modelu_samochodu = md.id
						WHERE s.id =  "'.$_GET['samochod'].'%"  '
				) as $row) 
				
	foreach($db->query( 'SELECT *FROM samochody_rezerwacje WHERE id_samochodu = '.$row['id'] ) as $row2) 
	{
			  
         $terminy .="<b>data wypozyczenia: </b>".$row2['data_wypozyczenia']."<br>  <b>data zwrotu: </b>".$row2['data_oddania']."<br>";
    }			
      print "<tr>";
      print "<td>".$row['marka']."</td>";
      print "<td>".$row['model']."</td>";
      print "<td>".$row['rok_produkcji']."</td>";
      print "<td>".$row['kolor']."</td>";
      print "<td>".$row['ilosc_drzwi']."</td>";
      print "<td>$terminy</td>";
      print "</tr>";
//      }
print "</table>";



print "<form action=\"rezerwuj_termin.php\" method=\"post\">
      <input type=\"hidden\" name=\"samochod\" value=\"".$_GET['samochod']."\">
       <br><br>
       <br>Data wypozyczenia: <input type=\"text\" name=\"data_wypozyczenia\" value=\"\"> (rok-miesiac-dzien: np: 2017-01-12)
       <br><br>Data oddania: <input type=\"text\" name=\"data_oddania\" value=\"\"> (rok-miesiac-dzien: np: 2017-01-12)
       <br><br>Imie i nazwisko<br><input type=\"text\" name=\"imie_nazwisko\" value=\"\">
       <br>Adres<br><textarea name=\"adres\"></textarea>
       <br>telefon<br><input type=\"text\" name=\"telefon\" value=\"\">
       <br><input type=\"submit\" value=\"Rezerwuj\">";
	   
print '</body></html>';       
//mysql_close($mysql);
?>
