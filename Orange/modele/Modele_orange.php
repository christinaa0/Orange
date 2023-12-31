<?php

class Modele {
    private $unPDO;
    public function __construct(){
        try{
            $url="mysql:host=localhost;dbname=orange";
            $user = "root";
            $mdp = "" ; //PC: $mdp ="";
            $this ->unPDO = new PDO ($url, $user, $mdp);
        }
        catch (PDOException $exp){
            echo "<br> Erreur de connexion à la BDD" ;
        }
    }

    /***************** GESTION DES CLIENT******************/
    public function insertClient ($tab){
        $requete = "insert into client values (null, :nom, :prenom, :adresse, :email);";
        $donnees = array(":nom" => $tab['nom'],
            ":prenom"=>$tab["prenom"],
            ":adresse"=> $tab ["adresse"],
            ":email"=> $tab ["email"]);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }

    public function selectAllClient(){
        $requete = "Select * from client ;";
        $select = $this->unPDO->prepare($requete);
        $select -> execute ();
        return $select->fetchAll ();

    }
    public function deleteClient($idclient){
        $requete = "Delete from client where idclient = :idclient;";
        $donnees = array(":idclient" =>$idclient);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }

    public function selectWhereClient($idclient){
        $requete = "Select * from client where idclient =:idclient;";
        $donnees = array(":idclient" =>$idclient);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
        return $select->fetch();
    }
    
    public function updateClient($tab){
        $requete = "update client set nom=:nom, prenom = :prenom, adresse = :adresse ,email = :email  where idclient=:idclient";
        $donnees = array(":nom" => $tab['nom'],
            ":prenom"=>$tab["prenom"],
            ":adresse"=> $tab ["adresse"],
            ":email"=>$tab["email"], 
            ":idclient"=>$tab["idclient"], ) ;
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }
    public function selectLikeClient($filtre){
        $requete = "select * from client where nom like :filtre or prenom like :filtre or adresse like :filtre or email like :filtre;";
        $donnees = array(":filtre" =>"%".$filtre."%");
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
        return $select->fetchAll();
    }



    /***************** GESTION DES PRODUITS ******************/
    public function insertProduit($tab){
        $requete = "insert into produit values (null, :designation, :prixAchat, :etat, :dateAchat,:idclient);";
        $donnees = array(":designation" => $tab['designation'],
                ":prixAchat"=>$tab["prixAchat"],
                ":etat"=>$tab["etat"],
                ":dateAchat"=> $tab ["dateAchat"],
                ":idclient"=> $tab ["idclient"]);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }

    public function selectAllProduit (){
        $requete = "Select * from produit ;";
        $select = $this->unPDO->prepare($requete);
        $select -> execute ();
        return $select->fetchAll ();

    }
    public function deleteProduit($idproduit){
        $requete = "Delete from produit where idproduit = :idproduit;";
        $donnees = array(":idproduit" =>$idproduit);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }

    public function selectWhereProduit($idproduit){
        $requete = "Select * from produit where idproduit =:idproduit;";
        $donnees = array(":idproduit" =>$idproduit);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
        return $select->fetch();
    }

    public function updateProduit($tab){
        $requete = "update produit set designation=:designation, prixachat = :prixachat,etat= :etat, dateachat = :dateachat, idclient = :idclient where idproduit=:idproduit";
        $donnees = array(":designation" => $tab['designation'],
            ":prixachat"=>$tab["prixachat"],
            ":etat"=>$tab["etat"],
            ":dateachat"=> $tab ["dateachat"],
            ":idclient"=> $tab ["idclient"]);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute($donnees);
    }
    public function selectLikeProduit($filtre){
        $requete = "select * from produit where designation like :filtre or prixachat like :filtre or etat like :filtre or dateachat like :filtre or idclient like :filtre;";
        $donnees = array(":filtre" =>"%".$filtre."%");
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
        return $select->fetchAll();
    }
    
    
    /***************** GESTION DES TECHNICIEN ******************/
    
    
    public function insertTechnicien ($tab){
        $requete = "insert into technicien values (null, :nom, :prenom,:qualification,:email);";
        $donnees = array(":nom" => $tab['nom'],
            ":prenom"=>$tab["prenom"],
            ":qualification"=>$tab["qualification"],
            ":email"=>$tab["email"]);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }

    public function selectAllTechnicien(){
        $requete = "Select * from technicien ;";
        $select = $this->unPDO->prepare($requete);
        $select -> execute ();
        return $select->fetchAll ();

    }
    public function deleteTechnicien($idtechnicien){
        $requete = "Delete from technicien where idtechnicien = :idtechnicien;";
        $donnees = array(":idtechnicien" =>$idtechnicien);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }


    public function selectWhereTechnicien($idtechnicien){
        $requete = "Select * from technicien where idtechnicien =:idtechnicien;";
        $donnees = array(":idtechnicien" =>$idtechnicien);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
        return $select->fetch();
    }

    public function updateTechnicien($tab){
        $requete = "update technicien set nom=:nom, prenom = :prenom,qualification = :qualification, email= :email where idtechnicien =:idtechnicien";
        $donnees = array(":nom" => $tab['nom'],
            ":prenom"=>$tab["prenom"],
            ":idtechnicien"=> $tab ["idtechnicien"],
            ":email"=>$tab["email"]);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute($donnees);
    }
    public function selectLikeTechnicien($filtre){
        $requete = "select * from technicien where nom like :filtre or prenom like :filtre or qualification like :filtre or email like :filtre;";
        $donnees = array(":filtre" =>"%".$filtre."%");
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
        return $select->fetchAll();
    }




    /***************** GESTION DES INTERVENTION ******************/
    public function insertIntervention($tab){
        $requete = "insert into intervention values (null, :dateinter, :prixinter, :rapport, :idproduit,:idtechnicien);";
        $donnees = array(":dateinter" => $tab['dateinter'],
            ":prixinter"=>$tab["prixinter"],
            ":rapport"=>$tab["rapport"],
            ":idproduit"=> $tab ["idproduit"],
            ":idtechnicien"=> $tab ["idtechnicien"]);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }

    public function selectAllIntervention (){
        $requete = "Select * from intervention ;";
        $select = $this->unPDO->prepare($requete);
        $select -> execute ();
        return $select->fetchAll ();

    }
    public function deleteIntervention($idinter){
        $requete = "Delete from intervention where idintervention = :idinter;";
        $donnees = array(":idinter" =>$idinter);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }

    public function selectWhereIntervention($idinter){
        $requete = "Select * from intervention where idinter =:idinter;";
        $donnees = array(":idinter" =>$idinter);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
        return $select->fetch();
    }

    public function updateIntervention($tab){
        $requete = "update intervention set dateinter=:dateinter, prixinter = :prixinter,rapport= :rapport, idproduit = :idproduit, idtech = :idtech where idinter=:idinter";
        $donnees = array(":dateinter" => $tab['dateinter'],
            ":prixinter"=>$tab["prixinter"],
            ":rapport"=>$tab["rapport"],
            ":idproduit"=> $tab ["idproduit"],
            ":idtech"=> $tab ["idtech"]);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute($donnees);
    }
    public function selectLikeIntervention($filtre){
        $requete = "select * from intervention where dateinter like :filtre or prixinter like :filtre or rapport like :filtre or idproduit like :filtre or idtech like :filtre;";
        $donnees = array(":filtre" =>"%".$filtre."%");
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
        return $select->fetchAll();
    }

/******************** TABLE USER************ */
    public function verifConnexion($email, $mdp){
        $requete="select * from user where email= :email and mdp= :mdp;";   
        $select =$this->unPDO->prepare ($requete);
        $donnees=array(":email"=>$email, ":mdp"=>$mdp);
        $select->execute($donnees);
        return $select->fetch();
    }
    
}

?>