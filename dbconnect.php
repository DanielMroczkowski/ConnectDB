<?php

$username = 'root';
$password = '';
//$host = 'localhost';
//$dbname = 'wypozyczalnia';

//$db = new PDO('mysql:host=localhost;dbname=wypozyczalnia;charset=utf8', $username , $password); or die ("Nie mo�na si� po��czy�");

try {
    $db = new PDO('mysql:host=localhost;dbname=wypozyczalnia;charset=utf8', $username, $password); //logowanie do XAMPP
	//$db = new PDO ('pgsql:host=localhost;port=5432;dbname=wypozyczalnia;user=postgres;password=postgres'); 
    //foreach($db->query('SELECT * from samochody') as $row) {
    //    print_r($row); print "<br> <br><br><br><br><br>";
	//print"Polaczylo sie :D ";
    //}
    //$db = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
	
}

//mysql_select_db ($db_name) or die ("Nie mozna wybra� bazy danych");
 
//$result = mysql_query("SET NAMES latin2");


//$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
//$db = new PDO('mysql:host=localhost;dbname=samochody;charset=utf8', 'root', '');
?>




