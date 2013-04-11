<?php
require_once("Classes/appelClasse.php");
$userManager = new UserManager();
$users       = $userManager->selectAll();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Mon Tableau de Chasse</title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <script src="JS/index.js"></script>
    </head>
    <div data-role="page">
        <div data-role="header"> 
            <h2>Mon tableau de chasse</h2> 
        </div> 
        <div data-role="content">
            <form method="post">
                <label for="qui">Qui êtes vous?</label>
                <select name="qui" id="qui">
                    <?php
                    for ($i = 0; $i < sizeof($users); $i++)
                    {
                        echo "<option value='" . $users[$i]["ID"] . "'>" . $users[$i]["Prenom"] . " " . $users[$i]["Nom"] . "</option>";
                    }
                    ?>
                </select>
                <input type="password" name="mdp" id="mdp">
                <button type="button" id="connexion" onclick="connexion1()">Connexion</button>
            </form>
            <div data-role="footer" id="footer"> 
                <h2>Bienvenue</h2> 
            </div> 
        </div>
    </div>
</body>
</html>
