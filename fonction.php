<?php 

    function dbconnect()
    {
        $PARAM_hote='mysql-decoration.alwaysdata.net'; // le chemin vers le serveur
        $PARAM_port='3306'; 
        $PARAM_nom_bd='decoration_bdd'; // le nom de votre base de données 
        $PARAM_utilisateur='157046'; // nom d'utilisateur pour se connecter 
        $PARAM_mot_passe='rakoto123456789'; // mot de passe de l'utilisateur pour se connecter 
        $connexion = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
        return $connexion;
    }

    function listeCategorie()
    {
        $connex = dbconnect();
        $sql=$connex->query("SELECT * FROM categorie");
        $sql->setFetchMode(PDO::FETCH_OBJ);
        $tab = array();
        while( $ligne = $sql->fetch() )
        {       
            $tab[] = $ligne;
        } 
        $sql->closeCursor();
        return $tab;	
    }

    function findCategorie($condition)
    {
        $connex = dbconnect();
        $sql=$connex->query("SELECT * FROM categorie ".$condition);
        $sql->setFetchMode(PDO::FETCH_OBJ);
        $tab = array();
        while( $ligne = $sql->fetch() )
        {       
            $tab[] = $ligne;
        } 
        $sql->closeCursor();
        return $tab;	
    }

?>