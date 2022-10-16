<?php

session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: masuk.php"); // Redirecting To Home Page
}
?>