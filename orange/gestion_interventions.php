<center>
    <h2>GESTION DES INTERVENTIONS</h2>
    <?php

    $lIntervention=null;
    if (isset($_GET['action']) && isset($_GET['idinter'])) {
        $action = $_GET['action'];
        $idinter= $_GET['idinter'];
        switch($action) {
            case "sup" : $unControleur->deleteIntervention($idinter); 
            break;
            case "edit" : $lIntervention= $unControleur -> selectWhereIntervention($idinter);
            break;
        }
    }
    require_once ("vue/vue_insert_intervention.php");


if (isset($_POST['Modifier'])){
    $unControleur->updateIntervention ($_POST);
    header("Location: index.php?page=5");

}
if (isset($_POST['Valider'])) {
            //envoi des donnes au controleur

    $unControleur->insertIntervention ($_POST);
    }
    //recup de tt mes Interventions

if (isset($_POST['Filtrer'])){
   $lesInterventions =$unControleur->selectLikeIntervention ($_POST['filtre']);
} else {

    $lesInterventions=$unControleur->selectAllIntervention();
}
    require_once("vue/vue_select_intervention.php");


    ?>