<?php
    require_once("Classes/appelClasse.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "test";
        $c = array("Test1", "Test2");
        var_dump($c);
        echo $a;
            $user = $userManager->select($_POST["id"]);
            echo "test";    
            var_dump($user);
        ?>
    </body>
</html>
