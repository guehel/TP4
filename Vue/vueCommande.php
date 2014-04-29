<?php
$titre = 'commande';
$legende = 'Formulaire de commande';
$action = '../controleur/Commande.php';
?>
<?php ob_start(); ?>
<div>
    <fieldset>
        <table>
            <tr>
                <td>  
                    <label for="disque">Disque dure</label> 
                </td>
                <td>  
                    <input type="text" id="disque"  name="disque" value='<?=$commande->getDisque()?>'/>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>  
                    <label for="souris">Souris</label>
                </td>
                <td>
                    <input type="text" id="souris" name="souris" value='<?=$commande->getSouris()?>'/>
                </td><td>&nbsp;</td>
            </tr>
            <tr>
                <td>  
                    <label for="cable">Cable</label>
                </td>
                <td>
                    <input type="text" id="cable" name="cable" value='<?=$commande->getCable()?>'/>
                </td><td>&nbsp;</td>
            </tr>
            <tr>
                <td>  
                    <label for="adresse">Adresse de livraison</label>
                </td>
                <td>
                    <input type="text" id="adresse" name="adresse" value='<?=$commande->getAdresse()?>'/>
                </td><td>&nbsp;</td>
            </tr>

        </table>


    </fieldset>
</div>
<br/>
<input type="submit" value='Envoyer'/>
<input type='reset' value='Effacer'/>

<?php $contenu = ob_get_clean(); ?>
<?php include 'layout.php' ?>
