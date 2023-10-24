
<h2>Liste des intervention</h2>
<form method="post">
    filtrer par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br/>
<table border="1">
    <tr>
        <td>Id Intervention</td>
        <td>Date Intervention</td>
        <td>Prix Intervention</td>
        <td>Rapport Intervention</td>
        <td>idProduit</td>
        <td>idTechnicien</td>

    </tr>
    <?php
    if (isset($lesInterventions)){
        foreach ($lesInterventions as $uneIntervention){
            echo"<tr>";
            echo"<td>" . $uneIntervention['idinter'] ."</td>";
            echo"<td>" . $uneIntervention['dateinter'] ."</td>";
            echo"<td>" . $uneIntervention['prixinter'] ."</td>";
            echo"<td>" . $uneIntervention['rapport'] ."</td>";
            echo"<td>" . $uneIntervention['idproduit'] ."</td>";
            echo"<td>" . $uneIntervention['idtech'] ."</td>";
            echo"<td>";
            echo"<a 
                href ='index.php?page=3&action=supp&idprofesseur=".$uneIntervention['idinter']."'><img src='images/technicien.png' 
                height='30' width='30'></a>";

            echo"<a 
                href ='index.php?page=3&action=edit&idprofesseur=".$uneIntervention['idinter']."'><img src='images/editer.png' 
                height='30' width='30'></a>";


            echo"</td>";
            echo"</tr>";

        }
    }
    ?>


</table>
<br>
<br>
<br>