<h3> Liste des clients</h3>
<form method="post">
    Filtrer par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br/>
<table border="1">
    <tr>
        <td>idproduit</td>
        <td>designation</td>
        <td>prixAchat</td>
        <td> Etat</td>
        <td>dateAchat</td>
        <td>operations</td>
    </tr>
    <?php
    if (isset($lesproduits)){
        foreach ($lesproduits as $unproduit){
            echo "<tr>";
            echo "<td>" . $unproduit['idproduit'] ."</td>";
            echo "<td>" . $unproduit['nom'] ."</td>";
            echo "<td>" . $unproduit['designation'] ."</td>";
            echo "<td>" . $unproduit['prixAchat'] ."</td>";
            echo "<td>" . $unproduit['Etat'] ."</td>";
            echo "<td>" . $unproduit['dateAchat'] ."</td>";
            echo "<td>" . $unproduit['idclient'] ."</td>";
            echo "<td>";
            echo "<a href='index.php?page=3&action=sup&idproduit=".$unproduit['idproduit']."'><img src='images/supprimer.png' height='30' width='30'></a>";
            echo "<a href='index.php?page=3&action=edit&idproduit=".$unclient['idproduit']."'><img src='images/editer.png' height='30' width='30'></a>";
            echo "</td>";
            echo"</td>";
        }
    } ?>
</table>