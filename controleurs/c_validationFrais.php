<?php
$action = $_REQUEST['action'];
switch($action){
	case 'choixVisiteur':
        {
                $tab=$pdo->GetLesVisiteursCloturer();
                
                include ("vues/v_choixVisiteur.php");
                
		break;
	}
        case'choixMois':
        {
                $visiteur=$_REQUEST["visiteur"];
                $_SESSION['visiteur']= $visiteur;
                
                $tab=$pdo->getLesMois($visiteur);
                include ("vues/v_choixMois.php");
		break;
        }
         case 'afficherFrais':{
           $idVisiteur = $_SESSION['visiteur']; 
           $leMois = $_REQUEST['mois']; 
           $_SESSION["leMois"]=$leMois;
           
           
		
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$leMois);
		$lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur,$leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur,$leMois);
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		$libEtat = $lesInfosFicheFrais['libEtat'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		include("vues/v_etatFrais.php");
              
                
                break ;
	}
        case 'actualiserFraisForfait' : {
            
          $idVisiteur = $_SESSION['idVisiteur'] ;
          $leMois = $_SESSION['leMois'] ;
         $numAnnee =substr( $leMois,0,4);
	$numMois =substr( $leMois,4,2);
        $lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur,$leMois);  
        include("vues/v_listeFraisForfait.php");  
            
        break;
        
        }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

