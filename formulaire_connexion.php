<html>
<link rel="stylesheet" href="programme_disposition.css" />
   <head>
      <title>Page connexion divercity</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <fieldset>
            <legend><h1>Connexion à Divercity</h1></legend> 
               <br /><br />
                  <fieldset>
                     <legend><h2>Veuillez entrer vos identifiants </h2></legend>
                     <form method="POST" action="">
                        <table>
                        <p></p>
                        <p></p>
                           <tr>
                              <td align="right">
                                 <label for="mail"> Adresse mail :</label>
                              </td>
                              <td>
                                 <input type="email" name="mailconnect" placeholder="Mail" required /></br>
                              </td>
                           </tr>

                           <tr>
                              <td align="right">
                                 <label for="mail"> Mot de passe :</label>
                              </td>
                              <td>
                                 <input type="password" name="mdpconnect" placeholder="Mot de passe" required />
                              </td>
                           </tr>

                           <tr>
                              <td align="center">
                                 <br />
                                    <input type="submit" name="formconnexion" value="Se connecter !" /> </br>
                                                                  </td>
                           </tr>
                           <tr>
                              <td>
                              </td>
                              <td>
                                 <p> Tu n'as pas encore de compte ? </p>
                                    <p> Clique <a href="http://localhost:8888/code%20actuel/inscriptiondivercity.php">ici</a> pour t'inscrire !</p>
                              </td>
                           </tr>
                        </table>
                     </form>
                     <?php
                     if(isset($erreur)) {
                        echo '<font color="red">'.$erreur."</font>";
                     }
                     ?>
                  </fieldset>
      </fieldset>
      </div>
   </body>
</html>