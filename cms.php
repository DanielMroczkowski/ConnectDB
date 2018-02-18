<?php

session_start();

$password = 'admin123';
$admin = 'admin123';

ini_set( 'display_errors', 'Off' ); // zakrywanie nie potrzebnych błędów
if($_POST['admin']== $admin && $_POST['password'] == $password)
{
	if(!$_SESSION['admin']= $admin)
	//ession_register("admin");
	$_SESSION['admin'] = $admin;

	if(!$_SESSION['password'] = $password)
	//session_register("password");
	$_SESSION['password'] = $password;
}

if(!$_SESSION['admin'] == $admin)
{
	die('<center>Zaloguj sie<br><br>
 		login: admin<br>
 		haslo: admin<br>
		pomoc jakbym zapomniał :D <br> <br><br><br>
		<br> OKNO LOGOWANIA ADMINISTRATORA<br>
 		<br><br>
		
 		<br><br>Zaloguj sie<br><br>
 		<form action="cms.php?szukaj=" method="post">
      Login:<input type="text" name="admin"><br>
      Haslo:<input type="password" name="password">
      <br><input type="submit" value="Zaloguj"><br>
	   <br><input type="reset"><br>
	  <br><a href="rezerwacje.php?szukaj="><input type="button" value="Powrot"></a><br>
	  ');
}

/*    //stare logowanie nie działające
$password = 'admin123';
$login = 'admin123';

if(isset($_POST['admin'])== $login && isset($_POST['pass']) == $password)
{
	if(!isset($_SESSION['admin']))
	//$_SESSION['user'];
	$_SESSION['admin'] = $login;

	if(!isset($_SESSION['pass']))
	//$_SESSION["pass"];
	$_SESSION['pass'] = $password;
}

if(!isset($_SESSION['admin']) == $login)
{
	die('<center>Zaloguj sie<br><br>
 		login: admin<br>
 		haslo: admin
 		<br><br>
		
		<form action="cms.php?szukaj=" method="post">
		<table border="0">
		<tr> 
		<td>Login</td><td><input type="text" name="admin" size="15"></td>
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

//odtad juz dziala
include_once 'dbconnect.php';

include_once 'cms_head.php';


print "<br>
       <a href=\"cms.php?szukaj=a\">a</a>
       <a href=\"cms.php?szukaj=b\">b</a>
       <a href=\"cms.php?szukaj=c\">c</a>
       <a href=\"cms.php?szukaj=d\">d</a>
       <a href=\"cms.php?szukaj=e\">e</a>
       <a href=\"cms.php?szukaj=f\">f</a>
       <a href=\"cms.php?szukaj=g\">g</a>
       <a href=\"cms.php?szukaj=h\">h</a>
       <a href=\"cms.php?szukaj=i\">i</a>
       <a href=\"cms.php?szukaj=j\">j</a>
       <a href=\"cms.php?szukaj=k\">k</a>
       <a href=\"cms.php?szukaj=l\">l</a>
       <a href=\"cms.php?szukaj=m\">m</a>
       <a href=\"cms.php?szukaj=n\">n</a>
       <a href=\"cms.php?szukaj=o\">o</a>
       <a href=\"cms.php?szukaj=p\">p</a>
       <a href=\"cms.php?szukaj=r\">r</a>
       <a href=\"cms.php?szukaj=s\">s</a>
       <a href=\"cms.php?szukaj=t\">t</a>
       <a href=\"cms.php?szukaj=u\">u</a>
       <a href=\"cms.php?szukaj=w\">w</a>
	    <a href=\"cms.php?szukaj=v\">v</a>
       <a href=\"cms.php?szukaj=x\">x</a>
       <a href=\"cms.php?szukaj=y\">y</a>
       <a href=\"cms.php?szukaj=z\">z</a>
       <a href=\"cms.php?szukaj=\">[wszystkie]</a>
       ";
print "<br><br>
       <table border=\"1\">
       <tr><td><b>Samochod</td>
      <td><b>Marka</td>
      <td><b>Model</td>
      <td><b>Rok produkcji</td>
      <td><b>Kolor</td>
      <td><b>Ilosc Drzwi</td>
      <td><b>Rezerwacje</td>
      </tr>";
	  
/*	  
$query = 'SELECT s.*,m.nazwa marka,md.nazwa model
         FROM samochody s 
		 INNER JOIN marki_samochodow m ON s.id_marki_samochodu = m.id
         INNER JOIN modele_samochodow md ON s.id_modelu_samochodu = md.id
         WHERE m.nazwa like "'.$_GET['szukaj'].'%"';
		 
		 
$result = mysql_query($query) or die("Error");
while ($row = mysql_fetch_array($result))
{
	$query2 = 'SELECT * FROM samochody_rezerwacje WHERE id_samochodu = '.$row['id'].' AND data_wypozyczenia > now() order by data_wypozyczenia';
	$result2 = mysql_query($query2) or die("Error");
	$terminy = '';
	while ($row2 = mysql_fetch_array($result2))
	{
		$terminy .= $row2['data_wypozyczenia']." - ".$row2['data_oddania'].", ".$row2['imie_nazwisko'].", ".$row2['adres'].", ".$row2['telefon']." <a href=\"cms_usun_rezerwacje.php?id=".$row2['id']."\">Usu�</a><br>";
	}

	print "<tr>";
	print "<td><a href=\"cms_edytuj_samochod_formularz.php?id=".$row['id']."\">Edytuj</a><br><a href=\"cms_usun_samochod.php?id=".$row['id']."\">Usun</a></td>";
	print "<td>".$row['marka']."</td>";
	print "<td>".$row['model']."</td>";
	print "<td>".$row['rok_produkcji']."</td>";
	print "<td>".$row['kolor']."</td>";
	print "<td>".$row['ilosc_drzwi']."</td>";
	print "<td>$terminy</td>";
	print "</tr>";

}
print '</table></body></html>';
*/
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
	
	print" <tr>";
	print "	<td>
			<a href=\"cms_edytuj_samochod_formularz.php?id=".$row['id']."\">Edytuj</a>  
			<br>
			<a href=\"cms_usun_samochod.php?id=".$row['id']."\">Usun</a>
			</td>";
	print"<td width='150'>".$row['marka']."</td>";
	print"<td width='150'>".$row['model']."</td>";
	print"<td width='150'>".$row['rok_produkcji']."</td>";
	print"<td width='150'>".$row['kolor']."</td>";
	print"<td width='150'>".$row['ilosc_drzwi']."</td>";
	print "<td >$terminy</td>";
	print"</tr>";			
}
	  
print '</table></body></html>';

?>
