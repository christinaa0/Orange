<h3> Ajout d'un nouveau client </h3>
<form method="post">
    <table>
        <tr>
            <td> designation :</td>
            <td> <input type="text" name="designation" value="<?= ($leclient !=null) ? $leclient['designation'] : ''?>"></td>
        </tr>
        <tr>
            <td> prixAchat:</td>
            <td> <input type="text" name="prixAchat"value="<?= ($leclient !=null) ? $leclient['prixAchat'] : ''?>"></td>
        </tr>
        <tr>
            <td> Etat :</td>
            <td> <input type="text" name="etat"value="<?= ($leclient !=null) ? $leclient['etat'] : ''?>"></td>
        </tr>
        <tr>
            <td>dateAchat :</td>
            <td> <input type="text" name="dateAchat"value="<?= ($leclient !=null) ? $leclient['dateAchat'] : ''?>"></td>
        </tr>
       
        <td> le client :</td>
            <td> <select name="idclient">
                <?php
foreach ($lesclients as $unclient) {
    echo "<option value ='" . $unclient['idclient'] . "'>";
    echo $unclient['nom'];
    echo"</option>";
}
                    ?>
                    
         </select>
        </td>
        </tr>
                
        
        <td> </td>
        <td> <input type="reset" name="Annuler" value="Annuler">
        <input type="submit"
        <?=($leclient !=null) ? ' name="Modifier" value="Modifier"':'
         name="Valider" value="Valider" ' ?>
         >
        </td>
         
         <?=($leclient !=null) ? '<input type="hidden" name="idproduit" value="'.$leclient['idproduit'].'">' : ' '?>"></td>
    </table>
</form>