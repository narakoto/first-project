<?php
require ("action/database.php");

if (isset ($_POST['validate']))
{
    if (!empty ($_POST['email']) && !empty ($_POST['pseudo']) && !empty ($_POST['password']))
    {
        $user_email = htmlspecialchars($_POST['email']);
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
        
        $checkIfUsersAlreadyExists = $bdd -> prepare('SELECT email FROM users WHERE email = ?');
    }
    else
    {
        $errorMsg = "veuillez completez tous les champs...";
    }
}
?>