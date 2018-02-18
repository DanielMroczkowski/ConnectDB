<?php
session_start();
session_destroy();

header("location: cms.php?szukaj=");
?>
