<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.CSS">
<title>tableau</title>
   </head>
   <header>
<div class="menu">
  <div class="logo-left">
    <img src="images/Logo_Universite_de_Ouagadougou.jpg" alt="" width="200px" height="200px">
  </div>
  <div class="text-center">
    <h1>BIENVENUE SUR LA PLATEFORME DE L'UFR/SDS</h1>
  </div>
  <div class="logo-right">
   <img src="images/20230506_143907.jpg" alt=""  width="200px" height="200px">
  </div>
</div>
</header>
   <body>
   <div class="container3">
			      <h2>LISTE DES ETUDIANTS</h2>
<div id='liste des étudiants'class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Nom</th>
            <th scope='col'>Prénom</th>
            <th scope='col'>Date de naissance</th>
            <th scope='col'>Date d'adhésion</th>
            <th scope='col'>Genre</th>
            <th scope='col'>Personne à prévenir</th>
        </tr>
        </thead>  
</div>
   <tbody>
   <?php
   include('connexion.php');
   $query = "SELECT * FROM etudiants_ufrsds";
   $stmt = $conn->query($query);
   while ($row = $stmt->fetch()){
//code pour afficher chaque ligne de résultat
echo"<tr>

<td>$row[id]</td>
<td>$row[nom]</td>
<td>$row[prenom]</td>
<td>$row[date_de_naissance]</td>
<td>$row[date_de_adhesion]</td>
<td>$row[genre]</td>
<td>$row[personne_a_prv]</td>
</tr>";
}
?>
  </tbody>
</table> 

    <form>
 <input class='bouton' type="button" value="Retour!" onclick="history.back()" >
     </form>  
     <section>
    <footer class="mainfooter" role="contentinfo">
  <div class="footer-down">
	<div class="row">
		<div class="col-md-12 copy">
			<p class="text-center2">&copy; Copyright 2023 - Unité de Formation et de Recherche en Science De la Santé 
   |Tous droits réservés.</p>
		</div>
	</div>
  </div>
  </div>
</footer>
    </section>