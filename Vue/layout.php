
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <script type ="text/javascript" src="../vue/script/script.js"></script>
        <link rel="stylesheet" type="text/css" href="http://localhost/TP3_POO3/vue/style/style.css">
        <title><?php echo $titre ?></title>
    </head>
    <body onload="">
        <div id="page">
        <div id="entete"></div>
        <div id="corps">
              <div id="gauche">
                  <a href='../controleur/commande.php'><span>Enregitrer commande</span></a>
                     <a href='../controleur/lister.php'>Liste des commandes</a>
             </div>
        <div id="droite">
            <form action ="<?php echo $action; ?>" method="GET">
                <fieldset>
                    <legend><?php echo $legende; ?></legend>
                    <?php echo $contenu;?>
                </fieldset>
            </form>
        </div>
         </div>    
     
        <p id="message"> <?php echo $message; ?> </p>
        </div>
    </body>
</html>
