<?php
$titre = 'inserer stagiaires';
$legende = 'Insérer un stagiaire en formation';
$action = '../controleur/formation.php';
?>
<?php ob_start(); ?>
<?php include 'vueFormateurs.php'; ?>
<table>
    <tr>
        <td><input type="reset" value="Effacer"/></td>
        <td><input type="submit" value="Envoyer"/></td>
    </tr>
</table>
<?php $contenu = ob_get_clean(); ?>
<?php include 'layout.php' ?>
