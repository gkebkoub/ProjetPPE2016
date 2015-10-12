    <!-- Division pour le sommaire -->
<?php 
    include("v_acide.php");
    
    ?>
    
    <h2> Validation Fiche de frais :</h2>
    <h3> Selectionner le visiteur  </h3>
    <form action="index.php?uc=ValidationFrais&action=choixMois" method="POST" onchange="submit()">
    
    <select name='visiteur'>
        <option value=''>Choisir un Visiteur</option>
 <?php 
  
 
  foreach ($tab as $res) {
    echo"<option value=".$res['id'].">".$res['nom']."</option>";
   }
 
 ?>
        </select>
</form>
    
</div>
    