<?
session_start(); 
$poprawny_login = 'admin'; 
$poprawne_haslo = 'admin'; 
$login = $_POST['login']; 
$haslo = $_POST['haslo']; 
 
if (isset($login) && isset($haslo)) 
{ 
    if ($login == $poprawny_login && $haslo == $poprawne_haslo) 
    { 
 
        $_SESSION['login'] = $login; 
        $_SESSION['licznik']; 
        header("Location: cms.php" . SID); 
        exit(); 
    } 
    else 
    { 
        echo 'Bledny login lub haslo'; 
    } 
} 
else 
{
    echo '<form action="login.php" method="post">'; 
    echo 'Login: <input type="text" size="20" name="login"<br>'; 
    echo 'Haslo: <input type="text" size="20" name="haslo"><p>'; 
    echo '<input type="submit" value="Zaloguj">'; 
    echo '</form>'; 
}


?>