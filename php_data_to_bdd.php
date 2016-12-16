<?php
   try
   {
      require("connectionbase.php");
   }
   catch(Exception $e)
   {
         die('erreur:'.$e->getMessage());
   }

   //là on s'est connecté à la base de données

   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $password = md5($_POST['mdp']);
   //on affecte des valeurs aux variables 


   $req=$bdd->prepare('INSERT INTO membres(pseudo,mail,password) VALUES (?, ?, ?)');
   // on previent notre base de données qu'on va mettre des valeurs dedans                  
   $req->execute(array($pseudo, $mail, $password));
   // la on met les valeurs dedans ( array c'est un tableau donc en fait on les met dans un tableau)
   echo " Votre compte est crée, vous devee désormais vous connecter : </br><input type=\"button\" onclick=\"document.location.href='php_verif_conn_to_bdd.php';\" value=\"Se Connecter\">";   
   $req->CloseCursor();
      

   ?>
