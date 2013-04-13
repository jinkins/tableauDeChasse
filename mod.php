<?php
require_once('Classes/appelClasse.php');
$conqueteManager = new ConqueteManager();
$conquetes       = $conqueteManager->select($_REQUEST["id"]);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        var_dump($conquetes);
        ?>
    </body>
</html>
