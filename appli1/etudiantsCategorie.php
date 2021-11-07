<?php
  $etudiantsCategorie = json_decode(file_get_contents("http://localhost/ProjetCnam/API/appli1/categorieJson.json"));
  ob_start();
?>
  <table class="table">
      <tr>
          <td>Id</td>  
          <td>Nom </td>
          <td>PRENOM</td>                                  
          <td>Alternance</td>
          <td>Formation_Continue</td>
          <td>Nom_Formation</td>
          <td>Niveau</td>
          
      </tr>
     <tbody>
        <?php foreach ($etudiantsCategorie as $etudiantCategorie ) : ?>
            <tr>
                <td><?= $etudiantCategorie->id?></td>     
                <td><?=  $etudiantCategorie ->Nom?></td>  
                <td><?=  $etudiantCategorie ->Prenom?></td>                                 
                <td><?=  $etudiantCategorie->alternance?></td>  
                <td><?=  $etudiantCategorie ->formation_continue?></td>  
                <td><?=  $etudiantCategorie ->nom_formation?></td>  
                <td><?=  $etudiantCategorie ->niveau_formation?></td>
            </tr>
       <?php endforeach ; ?>
    </tbody>
    </table>
<?php
 $content= ob_get_clean();
 require_once("template.php");