<?php
      if(isset($_POST['submit'])){
     $nom=$_POST['nom'];
     $prenom=$_POST['prenom'];
     $date_de_naissance = $_POST['date_de_naissance'];
     $date_de_adhesion=$_POST['date_de_adhesion'];
     $genre = $_POST['genre'];
     $personne_a_prv=$_POST['personne_a_prv'];

     include('connexion.php');
    try{
     $sql= "INSERT INTO etudiants_ufrsds (nom, prenom, date_de_naissance, date_de_adhesion, genre, personne_a_prv) VALUES (:nom, :prenom, :date_de_naissance, :date_de_adhesion, :genre,:personne_a_prv)";
    $stmt =$conn->prepare($sql);

    $stmt ->bindParam(':nom',$nom);
    $stmt ->bindParam(':prenom',$prenom);
    $stmt ->bindParam(':date_de_naissance',$date_de_naissance);
    $stmt ->bindParam(':date_de_adhesion',$date_de_adhesion);
    $stmt ->bindParam(':genre',$genre);
    $stmt ->bindParam(':personne_a_prv',$personne_a_prv);
    $stmt ->execute();

    $success=true;
    header('location: affichage.php');
    exit();
     
   }
   catch(PDOException $e) {
     die( 'Erreur : ' . $e->getMessage());
   }
   echo "Ajouter avec succès";
   }
   else{
    echo "Erreur : " ;
  }
    ?>
    <form method="post">
        <input type="submit" name="Liste des étudiants"
                class="button" value="Liste des étudiants" />
    </form>