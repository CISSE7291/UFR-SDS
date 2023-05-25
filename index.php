<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>Document</title>
    
</head>
<body>
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
	<section>
<!-- Container -->
<div class="container">
            <!-- Profile Card - 01 -->
            <div class="profile">
                <div class="profile__text">
                    <h3 class="profile__user-name">Réservez uniquement aux administrateurs</h3>
                    <button  class="button" id="Ajouter_etudiant"> AJOUTER UN ETUDIANT</button>
                </div>
            </div>
            <!-- Profile Card - 02 -->
            <div class="profile">
                <div class="profile__text">
                    <h3 class="profile__user-name">Réservez uniquement aux administrateurs</h3>
                    <button class="button" id="Liste_des_etudiants"> LISTE DES ETUDIANTS</button>
                </div>
            </div>
  </section>
	|<section>
            <!-- CONTAINER2 me contacter -->
            <div class="container2">
			<h2>AJOUTER UN(E) ETUDIANT(E)</h2>  
				<form id='formulaire' method="post" action="enregistrement.php">
                <!-- part 1 formulaire nom prenom -->
                    <div class="row">
                        <div class="col">
                            <div class="inputbox">
                                <input type="text" name="nom" id="nom" required ="required">
                                <span class="text">Nom</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="inputbox">
                                <input type="text" name="prenom" id="prenom" required ="required">
                                <span class="text">Prénom</span>
                            </div>
                        </div>
                    </div>

                    <!-- part 2 formulaire date de naissance -->
                    <div class="row">
                        <div class="col">
                            <div class="inputbox">
                                <input type="date" name="date_de_naissance" id="date_de_naissance" required ="required">
                                <span class="text">Date de naissance</span>
                            </div>
                        </div>
                    
                        <!-- part 3 formulaire date d'adhésion -->
                    <div class="row">
                        <div class="col">
                            <div class="inputbox">
                                <input type="date" name="date_de_adhesion" id="date_de_adhesion" required ="required">
                                <span class="text">Date d'adhésion</span>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col">
                            <div class="inputbox">
                                <tr>
                                    <td></td>
                                    <td>
                                         Masculin <input type="radio" name="genre" value="M" />
                                         Feminin <input type="radio" name="genre" value="F" />
                                   </td>
                                 </tr> 
                            </div>
                        </div>
                    <div class="row">
                        <div class="col">
                            <div class="inputbox">
                                <input type="text" name="personne_a_prv" id="personne_a_prv" required ="required">
                                <span class="text">Personne à prévenir</span>
                            </div>
                        </div>
                    </div>
                       
                    <!-- boutton ajouter -->
                    <div class="row">
                        <div class="col">
                            <input type="submit" name="submit" value="Ajouter">
                        </div>
                    </div>
                </form>
            </div>
        </section>
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
    <script src="style.JS"></script> 
</body>
</html>