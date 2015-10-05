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
            include ("vues/v_choixMois.php");
                
		break;
        }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

