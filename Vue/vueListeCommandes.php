<?php
$titre = 'Commandes client';
$legende = 'Commandes des clients';
$action = '../controleur/lister.php';
$message = '';
ob_start();
?>
<div>
   <table >
        <tr>
            <th>Date</th>
            <th>Heure</th>
            <th>Adresse</th>
            <th>Disques</th>
            <th>Souris</th>
            <th>Cables</th>

        </tr>
        <?php foreach ($commandes as $commande): ?>
            <tr>
                <td> <?php echo $commande->getDate(); ?> </td>
                <td> <?php echo $commande->getHeure(); ?> </td>
                <td> <?php echo $commande->getAdresse(); ?> </td>
                <td> <?php echo $commande->getDisque(); ?> </td>
                <td> <?php echo $commande->getSouris(); ?> </td>
                <td> <?php echo $commande->getCable(); ?> </td>

            </tr>

        <?php endforeach; ?>
    </table>

<?php
$contenu = ob_get_clean();
include 'layout.php';
?>

