<?php
require_once('Classes/appelClasse.php');
$conqueteManager = new ConqueteManager();
$conquetes       = $conqueteManager->selectFromConquerant(2);
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
    <body>
        <div data-role="page">
            <div data-role="header"> 
                <h2>Mon tableau de chasse</h2> 
            </div> 
            <div data-role="content">
                <div class="content-primary">	
                    <ul data-role="listview">
                        <?php
                        for ($i = 0; $i < sizeof($i); $i++)
                        {
                            ?>
                            <li><a href = '<?php echo "mod.php?id=" . $conquetes[$i]->get("id") ?>'/>
                                <img src = 'IMG/<?php echo $conquetes[$i]->get("id") ?>.jpg' />
                                <h3><?php echo $conquetes[$i]->get("nom") . " " . $conquetes[$i]->get("prenom"); ?></h3>
                                <p></p>
                                </a></li>

                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>

