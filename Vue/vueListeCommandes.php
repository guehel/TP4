<?php
$titre = 'Commandes client';
$legende = 'Commandes des clients';
$action = '../controleur/lister.php';
$message = '';
ob_start();
?>
<div>
    <?php foreach ($commandes as $c): ?>
        <?php echo $c.'<br/>'; ?>
    <?php endforeach; ?>
</div>

<?php
$contenu = ob_get_clean();
include 'layout.php';
?>

