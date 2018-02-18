<? session_start(); 
echo 'Uzytkownik o nazwie "' . $_SESSION["login"] . '" zostal wylogowany.'; 
session_destroy(); 
?> 