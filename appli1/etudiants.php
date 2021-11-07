<?php
  $etudiants = json_decode(file_get_contents("http://localhost/ProjetCnam/API/donneesJson.json"));
  ob_start();
?>
  <table class="table">
      <tr>
          <td>Id</td>                                    
          <td>ENTREPRISE</td>
          <td>NOM</td>
          <td>PRENOM</td>
          <td>EMAIL</td>
          <td>VILLE</td>
          <td>TELEPHONE</td>
          <td>FONCTION</td>
      </tr>
     <tbody>
        <?php foreach ($etudiants as $etudiant) : ?>
            <tr>
                <td><?=$etudiant->id?></td>                                    
                <td><?= $etudiant ->Company?></td>  
                <td><?= $etudiant ->First_Name?></td>  
                <td><?= $etudiant ->Last_Name ?></td>  
                <td><?= $etudiant ->Email?></td>  
                <td><?= $etudiant ->State  ?></td>  
                <td><?= $etudiant ->Phone  ?></td>  
                <td><?= $etudiant ->Description ?></td>  
            </tr>
       <?php endforeach ; ?>
    </tbody>
    </table>
<?php
 $content= ob_get_clean();
 require_once("template.php");