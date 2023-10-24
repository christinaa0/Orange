<h3> Ajout d'un nouveau produit </h3>
<form method="post">
    <table>
        <tr>
            <td> designation :</td>
            <td> <input type="text" name="designation" value="<?= ($leproduit !=null) ? $leproduit['designation'] : ''?>"></td>
        </tr>
        <tr>
            <td> prixAchat:</td>
            <td> <input type="text" name="prixAchat"value="<?= ($leproduit !=null) ? $leproduit['prixAchat'] : ''?>"></td>
        </tr>
        <tr>
            <td> Etat :</td>
            <td> <input type="text" name="etat"value="<?= ($leproduit !=null) ? $leproduit['etat'] : ''?>"></td>
        </tr>
        <tr>
            <td>dateAchat :</td>
            <td> <input type="text" name="dateAchat"value="<?= ($leproduit !=null) ? $leproduit['dateAchat'] : ''?>"></td>
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
        <?=($leproduit !=null) ? ' name="Modifier" value="Modifier"':'
         name="Valider" value="Valider" ' ?>
         >
        </td>
         
         <?=($leproduit !=null) ? '<input type="hidden" name="idproduit" value="'.$leproduit['idproduit'].'">' : ' '?>"></td>
    </table>
</form>
