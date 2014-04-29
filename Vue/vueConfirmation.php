<?php
$titre = 'inserer stagiaires';
$legende = 'Resultat de la commande';
$action = '../controleur/Commande.php';
?>
<?php ob_start(); ?>

<input type='hidden' name='confirme' value ='true'/>
<input type='hidden' name='commande' value ='<?=$commande->toArray() ?>'/>
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

        <td>Disques dure:</td>
        <td><?= $commande->getDisque() ?> </td>
    </tr>
    <tr>

        <td>Souris:</td>
        <td><?= $commande->getSouris() ?> </td>
    </tr>
    <tr>

        <td>Cable:</td>
        <td><?= $commande->getCable() ?> </td>
    </tr>
    <tr>

        <td>Total:</td>
        <td><?= $commande->getValeur() ?> </td>
    </tr>
    <tr>

        <td>Adresse:</td>
        <td><?= $commande->getAdresse() ?> </td>
    </tr>
    <tr>

        <td><input type="reset" value="Annuler"/></td>
        <td><input type="submit" value="Confirmer"/></td>
    </tr>
</table>
<?php $contenu = ob_get_clean(); ?>
<?php include 'layout.php' ?>
