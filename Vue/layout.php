
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type ="text/javascript" src="../vue/script/script.js"></script>
        <link rel="stylesheet" type="text/css" href="http://localhost/TP3_POO3/vue/style/style.css">
        <title><?php echo $titre ?></title>
    </head>
    <body onload="">
        <div id="page">
            <div id="entete"><h1>Paul's Informatique</h1></div>
            <div id="corps">
                <div id="gauche">
                    <a href='../controleur/commande.php'><span>Enregitrer commande</span></a>
                    <a href='../controleur/Recapituler.php'>Liste des commandes</a>
                </div>
                <div id="droite">
                    <form id = "formulaire" name= "formulaire" >
                        <fieldset>
                            <legend><?php echo $legende; ?></legend>
                            <?php echo $contenu; ?>
                        </fieldset>
                    </form>
                </div>
            </div>    

            <p id="message"> <?=isset($message['connexion'])?$message['connexion']:"" ?> </p>
        </div>
    </body>
</html>
