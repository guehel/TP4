<div>
    <fieldset>
<table>
     <tr>
        <td>  
            <label for="nom">Nom:</label> 
        </td>
        <td>  
            <input type="text" id="nom"  name="nom"/>
        </td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>  
            <label for="prenom">Prenom:</label>
        </td>
        <td>
            <input type="text" id="prenom" name="prenom"/>
        </td><td>&nbsp;</td>
    </tr>
    <tr>
        <td>  
            <label for="nationalite">Nationalité:</label>
        </td>
        <td>
            <select id ="nationalite" name ="nationalite" onchange="this.nextElementSibling.value=this.value;" >
                <option value="">Choisissez</option>
                <?php foreach ($nationalites as $nat): ?>
                    <option  value="<?php echo $nat['Id_nationalite']; ?>"> <?php echo $nat['Libelle']; ?> </option>
                <?php endforeach; ?>
            </select>
        </td><td>&nbsp;</td>
    </tr>
  <tr>
        <td>  
            <label for="formation">type de la formation:</label>
        </td>
        <td>
            <select id ="formation" name ="formation" onchange ="restrindreFormateur();">
                <?php foreach ($formations as $form): ?>
                    <option class ="choixFormation" value="<?php echo $form['Id_type_formation']; ?>"> <?php echo $form['Libelle']; ?> </option>
                <?php endforeach; ?>
            </select>
        </td><td>&nbsp;</td>
    </tr>
</table>

<table class="listeEtudiants">
 
    <tr>
        <th colspan="4">
            formateur et date:
        </th>
    </tr>


    <?php foreach ($formateurs as $prof): ?>
        <tr class ="<?php echo $prof['ID_TYPE_FORMATION']; ?>" >
            <td>
                <input type="radio" name="professeur" value="<?php echo $prof['Id_Formateur']; ?>"> 
            </td>
            <td> 
                <?php echo $prof['PRENOM'] . ', ' . $prof['NOM'] . ' dans la salle ' . $prof['ID_SALLE']; ?>
            </td>
            <td>
                debut:<input type='text' name="debut<?php echo $prof['Id_Formateur']; ?>">
            </td>
            <td>
                fin:<input type='text' name="fin<?php echo $prof['Id_Formateur']; ?>">
            </td>
        </tr>     
    <?php endforeach; ?>
   
</table>
       </fieldset>
    </div>
<br/>