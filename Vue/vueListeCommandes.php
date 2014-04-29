<?php
$titre = 'Modification stagiaires';
$legende = 'Modifier un stagiaire en formation';
$action = '../controleur/modification.php';
ob_start(); ?>
<div>
    <fieldset>
    <legend>LISTE DES STAGIAIRES</legend>

    <table class="listeEtudiants">
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>Prenom</th>
        <th>Nationalite</th>
        <th>formation</th>
              <th>formateur</th>
        <th>debut</th>
        <th>fin</th>
        <th>Action</th>


    </tr>
    <?php foreach ($stagiaires as $etudiant): ?>
        <tr>
            <td> <?php echo $etudiant['Id']; ?> </td>
            <td class = '<?php echo 'm' . $etudiant['Id']; ?>' > <?php echo $etudiant['Nom']; ?> </td>
            <td class = '<?php echo 'm' . $etudiant['Id']; ?>' > <?php echo $etudiant['Prenom']; ?> </td>
            <td class = '<?php echo 'm' . $etudiant['Id']; ?>'> <?php echo $etudiant['nationalite']; ?> </td>
            <td><?php echo $etudiant['formation']; ?></td>
                 <td><?php echo $etudiant['nom_formateur'] . ' ' . $etudiant['prenom_formateur']; ?></td>
            <td><?php echo $etudiant['Date_debut']; ?></td>
            <td><?php echo $etudiant['Date_fin']; ?></td>
       
            <td><a href="http://localhost/TP3_POO3/controleur/modification.php?idEtudiant=<?php echo $etudiant['Id']; ?>&professeur=<?php echo $etudiant['id_formateur']; ?>&formation=<?php echo $etudiant['Id_type_formation']; ?>&action=1">supprimer</a>&nbsp;
                <a href="javascript:void(0)" onclick = "chargerEtudiant(<?php echo $etudiant['Id']; ?>, <?php echo "'" . $etudiant['Nom'] . "'"; ?>, <?php echo "'" . $etudiant['Prenom'] . "'"; ?>, <?php echo $etudiant['Id_nationalite'] ; ?>, <?php echo $etudiant['Id_type_formation']; ?>)" >Modifier</a></td>
        </tr>
    <?php endforeach; ?>
</table>
          </fieldset>
</div>
<div id="modifEtudiant" class="cache">
    <fieldset>
        <legend>MODIFIER STAGIAIRE</legend>
        <table>
            <tr>
                <td >
                   Id Etudiant:
                </td>
                <td>

                    <input type="TEXT" name="idEtudiant" id="idEtudiant" readonly="true"/>
                    <input type="hidden" name="action" value="2"/>
                </td>
            </tr>

        </table>
         </fieldset>
        <?php include 'vueFormateurs.php' ?>



        <input type="submit"  value ="Modifier"/> <input type="reset"  value ="Effacer"/>
   
</div>
<?php 
$contenu = ob_get_clean(); 
 include 'layout.php';
 ?>

