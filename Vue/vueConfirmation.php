<?php
$titre = 'inserer stagiaires';
$legende = 'Resultat de la commande';
$action = '../controleur/Commande.php';
?>
<?php ob_start(); ?>

<input type='hidden' id='confirme' name='confirme' value ='1'/>
<input type='hidden' id='commande' name='commande' value ='<?= json_encode($commande->toArray()) ?>'/>
<table>
    <tr>

        <td>Date:</td>
        <td><?= $commande->getDate() ?>  a <?= $commande->getHeure() ?> </td>
    </tr>
    <tr>

        <td colspan="2">Liste des items</td>

    </tr>
    <tr>

        <td>Objects commandes:</td>
        <td><?= $commande->getQuantite() ?>  </td>
    </tr>
    <tr>
        <td><?= $commande->getDisque() ?> </td>
        <td>Disques dures</td>
      
    </tr>
    <tr>
        <td><?= $commande->getSouris() ?> </td>
        <td>Souris</td>
    
    </tr>
    <tr>
         <td><?= $commande->getCable() ?> </td>
        <td>Cables</td>
       
    </tr>
    <tr>

        <td>Total de la commande </td>
        <td><?= $commande->getValeur() ?> $CAD </td>
    </tr>
    <tr>

        <td>Adresse de destination est </td>
        <td><?= $commande->getAdresse() ?> </td>
    </tr>
    <tr>

        <td><input type="button" id='annuler' value="Annuler"/></td>
        <td><input type="submit" value="Confirmer"/></td>
    </tr>
</table>
<?php $contenu = ob_get_clean(); ?>
<?php include 'layout.php' ?>
