

<?php


session_start();
include_once 'cms_check_admin.php';

include_once 'dbconnect.php';
include_once 'cms_head.php';

print "
		<br>
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

print "<br><b>Model_Marka</b><br>
       <table border=\"1\">
	   <tr>
      <td><b>Usuń</td>
      <td><b>Marka</td>

      </tr>";
	

	/*
	foreach($db->query('	SELECT s.*,m.nazwa marka,md.nazwa model
						FROM samochody s 
						inner join marki_samochodow m ON s.id_marki_samochodu = m.id
						INNER JOIN modele_samochodow md ON s.id_modelu_samochodu = md.id
						WHERE m.nazwa like   "'.$_GET['szukaj'].'%"  '
				) as $row) 
				
				
				SELECT m.* ,md.nazwa model
						FROM marki_samochodow m 
						LEFT JOIN modele_samochodow md ON m.id = md.id
				*/
foreach($db->query('	SELECT id, m.nazwa marka
						FROM marki_samochodow m 
						WHERE m.nazwa like   "'.$_GET['szukaj'].'%"  ' ) as $row)
				
{
	
	print" <tr>";
	print "	<td>  
			<a href=\"cms_usun_marke.php?id=".$row['id']."\">Usun</a>
			</td>";
	print"<td width='150'>".$row['marka']."</td>";
}
print '</table>';
print '<br><br><br><table align=\"right\" border=\"1\">
		<tr>
	  <td><b>Usuń</td>
      <td><b>Model</td>
	  </tr>
';


foreach($db->query('	SELECT id, m.nazwa model
						FROM modele_samochodow m 
						WHERE m.nazwa like   "'.$_GET['szukaj'].'%"  ' ) as $row2)
				
{
	
	print" <tr>";
	print "	<td>  
			<a href=\"cms_usun_model.php?id=".$row2['id']."\">Usun</a>
			</td>";
	print"<td width='150'>".$row2['model']."</td>";
}
/*
foreach($db->query('	SELECT m.nazwa marka
						FROM marki_samochodow m 
						WHERE md.nazwa like   "'.$_GET['szukaj'].'%"  ' ) as $row
					
		$db->query('	SELECT m.id, m.nazwa marka ,md.nazwa model
						FROM marki_samochodow m 
						LEFT JOIN modele_samochodow md ON m.id = md.id
						WHERE md.nazwa like   "'.$_GET['szukaj'].'%"  ' ) as $row2) 
	print "	<td>  
			<a href=\"cms_usun_samochod.php?id=".$row['id']."\">Usun</a>
			</td>";
	print"<td width='150'>".$row['model']."</td>";
	print"</tr>";			
*/
	  
print '</table></body></html>';

?>