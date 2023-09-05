
<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
} catch (Exception $e) {
    die("Erreur " . $e->getMessage());
}

//recuperation de lemail et du mot de passe
$Adress = $_POST['Adress'];
$motDePasse = $_POST['Mot_de_passe'];

if(isset($_POST['submit'])) {

    if(empty($_POST['Adress']) OR empty($_POST['Mot_de_passe'])) {
      echo "<script>alert('one or more inputs are empty');</script>";

    } else {

      $Adress = $_POST['Adress'];
      $password = $_POST['Mot_de_passe'];
     
      //check for the email with a quuery first
      $login = $bdd->query("SELECT * FROM Register WHERE Email='$Adress'");
      $login->execute();
        
      $fetch = $login->fetch(PDO::FETCH_ASSOC);
      if($login->rowCount() > 0) {
        ///echo "<script>alert('email is fine');</script>";

        //check for the password with password verfiy
        if(password_verify($password, $fetch['Mot_de_passe'])){
          session_start();
            $_SESSION['id'] = $fetch['id'];
            $_SESSION['nom_utilisateur'] = $fetch['nom_utilisateur'];
            
            // $_SESSION['email'] = $Adress;

           header('Location:index.php');

        } 

    }
    }
  }
?>



