<?php

session_start();

$password = 'user';
$login = 'user';

ini_set( 'display_errors', 'Off' ); // zakrywanie nie potrzebnych błędów
if($_POST['user']== $login && $_POST['password'] == $password)
{
	if(!$_SESSION['user']= $login)
	//ession_register("admin");
	$_SESSION['user'] = $login;

	if(!$_SESSION['password'] = $password)
	//session_register("password");
	$_SESSION['password'] = $password;
}

if(!$_SESSION['user'] == $login)
{
	die('<center>
 		login: user<br>
 		haslo: user<br>
		pomoc jakbym zapomniał :D <br> <br><br><br>
		<br> OKNO LOGOWANIA UŻYTKOWNIKA<br>
 		<br><br>Zaloguj sie<br><br>
 		<form action="rezerwacje.php?szukaj=" method="post">
      Login:<input type="text" name="user"><br>
      Haslo:<input type="password" name="password">
      <br><input type="submit" value="Zaloguj"><br>
	   <br><input type="reset"><br>
	  <br><a href="index.php"><input type="button" value="Powrot"></a><br>
	  ');
}
/*
if(isset($_POST['user'])== $login && isset($_POST['pass']) == $password)
{
	if(!isset($_SESSION['user']))
	//$_SESSION['user'];
	$_SESSION['user'] = $login;

	if(!isset($_SESSION['pass']))
	//$_SESSION["pass"];
	$_SESSION['pass'] = $password;
}

if(!isset($_SESSION['user']) == $login)
{
	die('<center>Zaloguj sie<br><br>
 		login: user<br>
 		haslo: user
 		<br><br>
		
		<form action="rezerwacje.php?szukaj=" method="post">
		<table border="0">
		<tr> 
		<td>Login</td><td><input type="text" name="user" size="15"></td>
		</tr>
		<tr>
		<td>Hasło</td><td><input type="password" name="pass" size="15"></td>
		</tr>
		</table>
		<input type="submit" value="Zaloguj"><br>
		<font color="red">UWAGA!</font><br>
		System rozróżnia małe i duże litery w loginie i haśle, a zatem, jeżeli w polu "Login" wpiszesz<br>
		<b>adamo</b>, to nie będzie to to samo co <b>aDAmo</b>!!
		</form>
		');
}
*/

include_once 'dbconnect.php';

include_once 'head.php';

print'<a href="wyloguj_usera.php?szukaj=">| Wyloguj usera</a>';


print "<br>
       <a href=\"rezerwacje.php?szukaj=a\">a</a>
       <a href=\"rezerwacje.php?szukaj=b\">b</a>
       <a href=\"rezerwacje.php?szukaj=c\">c</a>
       <a href=\"rezerwacje.php?szukaj=d\">d</a>
       <a href=\"rezerwacje.php?szukaj=e\">e</a>
       <a href=\"rezerwacje.php?szukaj=f\">f</a>
       <a href=\"rezerwacje.php?szukaj=g\">g</a>
       <a href=\"rezerwacje.php?szukaj=h\">h</a>
       <a href=\"rezerwacje.php?szukaj=i\">i</a>
       <a href=\"rezerwacje.php?szukaj=j\">j</a>
       <a href=\"rezerwacje.php?szukaj=k\">k</a>
       <a href=\"rezerwacje.php?szukaj=l\">l</a>
       <a href=\"rezerwacje.php?szukaj=m\">m</a>
       <a href=\"rezerwacje.php?szukaj=n\">n</a>
       <a href=\"rezerwacje.php?szukaj=o\">o</a>
       <a href=\"rezerwacje.php?szukaj=p\">p</a>
       <a href=\"rezerwacje.php?szukaj=r\">r</a>
       <a href=\"rezerwacje.php?szukaj=s\">s</a>
       <a href=\"rezerwacje.php?szukaj=t\">t</a>
       <a href=\"rezerwacje.php?szukaj=u\">u</a>
       <a href=\"rezerwacje.php?szukaj=w\">w</a>
	   <a href=\"rezerwacje.php?szukaj=v\">v</a>
       <a href=\"rezerwacje.php?szukaj=x\">x</a>
       <a href=\"rezerwacje.php?szukaj=y\">y</a>
       <a href=\"rezerwacje.php?szukaj=z\">z</a>
       <a href=\"rezerwacje.php?szukaj=\">[wszystkie]</a>
       ";
print "<br><b>Samochody</b><br>
       <table border=\"3\">
       <tr><td><b>Marka</td>
      <td><b>Model</td>
      <td><b>Rok produkcji</td>
      <td><b>Kolor</td>
      <td><b>Ilosc Drzwi</td>
      <td><b>Rezerwacje</td>
      </tr>";
	  
/*	 
$sth = $db->prepare( '	SELECT s.*,m.nazwa marka,md.nazwa model
						FROM samochody s inner join marki_samochodow m ON s.id_marki_samochodu = m.id
						INNER JOIN modele_samochodow md ON s.id_modelu_samochodu = md.id
						WHERE m.nazwa like   "'.$_GET['szukaj'].'%"  ');
$sth->execute();
if ($sth->execute())
	print"udalo sie \n"; 
else 
	print "nie udalo sie \n";
//$result = $db->prepare($query) or die("Error".mysql_error());

//wyswietlanie wszystkich wartosci przekazanych
//$result = $sth->fetchAll();
//print_r($result);

while ($row = $sth->fetchAll())
      {
      $sth2 = $db->prepare( 'SELECT *FROM samochody_rezerwacje' );
	   //WHERE id_samochodu = '.$row['id'].'   ' AND data_wypozyczenia > now() order by data_wypozyczenia
	  
      //$result2 = mysql_query($query2) or die("Error");
	 if ($sth2->execute())
	print"udalo sie\n "; 
else 
	print "nie udalo sie \n";
	
	 $sth2->execute();
	 $result2 = $sth2->fetchAll();print"<br><br><br><br><br>";
	 print_r($result2); 
	 
	 $terminy = '';
      while ($row2 =  $sth2->fetchAll())
            {
              $terminy .= $row2['data_wypozyczenia']." - ".$row2['data_oddania']."<br>";
           }
			
			
      print "<tr>";
      print "<td>".$row['marka']."</td>";
      print "<td>".$row['model']."</td>";
      print "<td>".$row['rok_produkcji']."</td>";
      print "<td>".$row['kolor']."</td>";
      print "<td>".$row['ilosc_drzwi']."</td>";
      //print "<td>$terminy<a href=\"rezerwuj.php?samochod=".$row['id']."\">Rezerwuj</a></td>";
      print "</tr>";

      }
  */
foreach($db->query('	SELECT s.*,m.nazwa marka,md.nazwa model
						FROM samochody s inner join marki_samochodow m ON s.id_marki_samochodu = m.id
						INNER JOIN modele_samochodow md ON s.id_modelu_samochodu = md.id
						WHERE m.nazwa like   "'.$_GET['szukaj'].'%"  '
				) as $row) 
{
	
	$terminy = '';
	foreach($db->query( 'SELECT *FROM samochody_rezerwacje WHERE id_samochodu = '.$row['id'] ) as $row2) 
	{
			  
         $terminy .="<b>data wypozyczenia: </b>".$row2['data_wypozyczenia']."<br>  <b>data zwrotu: </b>".$row2['data_oddania']."<br>";
    }
	
	print" <tr>";
	print"<td width='150'>".$row['marka']."</td>";
	print"<td width='150'>".$row['model']."</td>";
	print"<td width='150'>".$row['rok_produkcji']."</td>";
	print"<td width='150'>".$row['kolor']."</td>";
	print"<td width='150'>".$row['ilosc_drzwi']."</td>";
	//print"<td width='150'>".$row['rodzaj_pali']"</td>";
	print "<td>$terminy<a href=\"rezerwuj.php?samochod=".$row['id']."\">Rezerwuj</a></td>";
	print"</tr>";			
}
	  
print '</table></body></html>';
//mysql_close($mysql);
?>
