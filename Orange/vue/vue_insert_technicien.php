<h3> Ajout d'un nouveau techniciens</h3>
<form method="post">
    <table>
        <tr>
            <td> Nom du techniciens :</td>
            <td> <input type="text" name="nom" value="<?= ($leTechnicien !=null) ? $leTechnicien['nom'] : ''?>"></td>
        </tr>
        <tr>
            <td> Prenom :</td>
            <td> <input type="text" name="prenom"value="<?= ($laTechnicien !=null) ? $leTechnicien['prenom'] : ''?>"></td>
        </tr>
        <tr>
            <td> Qualification :</td>
            <td> <input type="text" name="qualification"value="<?= ($leTechnicien !=null) ? $leTechnicien['qualification'] : ''?>"></td>
        </tr>
        <tr>
            <td> Email:</td>
            <td> <input type="text" name="email"value="<?= ($leTechnicien !=null) ? $leTechnicien['email'] : ''?>"></td>
        </tr>
        
        <td> </td>
        <td> <input type="reset" name="Annuler" value="Annuler">
        <input type="submit"
        <?=($leTechnicien !=null) ? ' name="Modifier" value="Modifier"':'
         name="Valider" value="Valider" ' ?>
         >
        </td>
         
         <?=($leTechnicien !=null) ? '<input type="hidden" name="idclasse" value="'.$leTechnicien['idtech'].'">' : ' '?>
    </table>
</form>