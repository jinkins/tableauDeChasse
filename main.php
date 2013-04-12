<?php
require_once('Classes/appelClasse.php');
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
                        <li><a href="mod.php?id=1">
                                <img src="IMG/Laurent Kools.jpg" />
                                <h3>Laurent Kools</h3>
                                <p>La pute</p>
                            </a></li>
                        <li><a href="mod.php?id=2">
                                <img src="IMG/Geoffrey Huet.jpg" />
                                <h3>Geoffrey Huet</h3>
                                <p>Le dieu</p>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>

