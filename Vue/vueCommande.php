<?php
$titre = 'commande';
$legende = 'Formulaire de commande';
//$action = '../controleur/Commande.php';
?>
<?php ob_start(); ?>
<div>
    <input type='hidden' id='confirme' name='confirme' value ='0'/>
    <fieldset>
        <table>
            <tr>
                <td>  
                    <label for="disque">Disque dure</label> 
                </td>
                <td>  
                    <input type="text" class ='nombre' id="disque"  name="disque" value='<?=isset($commande)?$commande->getDisque():null?>'/>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>  
                    <label for="souris">Souris</label>
                </td>
                <td>
                    <input type="text"  class ='nombre' id="souris" name="souris" value='<?=isset($commande)?$commande->getSouris():null?>'/>
                </td><td>&nbsp;</td>
            </tr>
            <tr>
                <td>  
                    <label for="cable">Cable</label>
                </td>
                <td>
                    <input type="text" class ='nombre' id="cable" name="cable" value='<?=isset($commande)?$commande->getCable():null?>'/>
                </td><td>&nbsp;</td>
            </tr>
            <tr>
                <td>  
                    <label for="adresse">Adresse de livraison</label>
                </td>
                <td>
                    <input type="text"  class ='texte' id="adresse" name="adresse" value='<?=isset($commande)?$commande->getAdresse():null?>'/>
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
