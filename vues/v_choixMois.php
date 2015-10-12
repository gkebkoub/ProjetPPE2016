
<?php 
    include("v_acide.php");
    
    ?>
  <h2> Validation Fiche de frais :</h2>
    <h3> Selectionner le visiteur  </h3>
    <form action="index.php?uc=ValidationFrais&action=afficherFrais" method="POST" onchange="submit()">
    
    <select name='mois'>
        <option value=''>Choisir un Mois</option>
 <?php 
  
 
  foreach ($tab as $res) {
    echo"<option value=".$res['mois'].">".$res['mois']."</option>";
    
   }
 
 ?>
        </select>
</form>
    
</div>

