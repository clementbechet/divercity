<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="programme_disposition.css"/>
        <title>Programme</title>
    </head>

    <header>
    </header>

    <body>

            
        <div align= center>
            <h3>Différents liens de navigation</h3>
            <ul>
                <li><a href="page1.html">Contrôle capteur</a></li>
                <li><a href="page2.html">Consommation du domicile</a></li>
                <li><a href="page3.html">Profil</a></li>
            </ul>
        </div>
        <?php 
         $date= date("d-m-Y");
         $heure= date("H:i");
         echo $date;
         ?>

         
    
    
    <!-- Le corps -->
    
    <div align=center>
    	<fieldset>
    		<legend>
    			<h3>Mes Modes</h3>
    		</legend>
        <br />
        	
        		

        		<table>
        			<tr>
        				<td>
        					<label for="maison">Choisissez la maison: </label>
        				</td>

        				<td>
        					<select name="choix_maison">
        					<option value="choix1">Maison principale</option>
							<option value="choix2">Maison secondaire</option>
							<option value="choix3">Maison de vacances 1</option>
							<option value="choix4">Maison de vacances 2</option>
							<option value="choix5">Maison de vacances 3</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>
							<label for="debut_periode">Début du programme: </label>
						</td>


						<td>
							
						
							<select name="choix_debut_jour">
							<option value="choix1">1</option>
							<option value="choix2">2</option>
							<option value="choix3">3</option>
							<option value="choix4">4</option>
							<option value="choix5">5</option>
							<option value="choix6">6</option>
							<option value="choix7">7</option>
							<option value="choix8">8</option>
							<option value="choix9">9</option>
							<option value="choix10">10</option>
							<option value="choix11">11</option>
							<option value="choix12">12</option>
							<option value="choix13">13</option>
							<option value="choix14">14</option>
							<option value="choix15">15</option>
							<option value="choix16">16</option>
							<option value="choix17">17</option>
							<option value="choix18">18</option>
							<option value="choix19">19</option>
							<option value="choix20">20</option>
							<option value="choix21">21</option>
							<option value="choix22">22</option>
							<option value="choix23">23</option>
							<option value="choix24">24</option>
							<option value="choix25">25</option>
							<option value="choix26">26</option>
							<option value="choix27">27</option>
							<option value="choix28">28</option>
							<option value="choix29">29</option>
							<option value="choix30">30</option>
							<option value="choix31">31</option>
							</select>

							&nbsp

							<select name="choix_debut_mois">
							<option value="choix1">janvier</option>
							<option value="choix2">fevrier</option>
							<option value="choix3">mars</option>
							<option value="choix4">avril</option>
							<option value="choix5">mai</option>
							<option value="choix6">juin</option>
							<option value="choix7">juillet</option>
							<option value="choix8">août</option>
							<option value="choix9">septembre</option>
							<option value="choix10">octobre</option>
							<option value="choix11">novembre</option>
							<option value="choix12">decembre</option>
							</select>
							

						</td>
					</tr>
					<tr>
						<td>
							<label for="fin_periode">Fin programme:</label>
						</td>

						<td>
							<select name="choix_fin_jour">
							<option value="choix1">1</option>
							<option value="choix2">2</option>
							<option value="choix3">3</option>
							<option value="choix4">4</option>
							<option value="choix5">5</option>
							<option value="choix6">6</option>
							<option value="choix7">7</option>
							<option value="choix8">8</option>
							<option value="choix9">9</option>
							<option value="choix10">10</option>
							<option value="choix11">11</option>
							<option value="choix12">12</option>
							<option value="choix13">13</option>
							<option value="choix14">14</option>
							<option value="choix15">15</option>
							<option value="choix16">16</option>
							<option value="choix17">17</option>
							<option value="choix18">18</option>
							<option value="choix19">19</option>
							<option value="choix20">20</option>
							<option value="choix21">21</option>
							<option value="choix22">22</option>
							<option value="choix23">23</option>
							<option value="choix24">24</option>
							<option value="choix25">25</option>
							<option value="choix26">26</option>
							<option value="choix27">27</option>
							<option value="choix28">28</option>
							<option value="choix29">29</option>
							<option value="choix30">30</option>
							<option value="choix31">31</option>
							</select>

							&nbsp

							<select name="choix_fin_mois">
							<option value="choix1">janvier</option>
							<option value="choix2">fevrier</option>
							<option value="choix3">mars</option>
							<option value="choix4">avril</option>
							<option value="choix5">mai</option>
							<option value="choix6">juin</option>
							<option value="choix7">juillet</option>
							<option value="choix8">août</option>
							<option value="choix9">septembre</option>
							<option value="choix10">octobre</option>
							<option value="choix11">novembre</option>
							<option value="choix12">decembre</option>
							</select>


					<tr>
						<td>
							<label for="temperature_désirée">Température:</label>
						</td>

						<td>
						<input type="int" placeholder="température en degrés" name="température">
						</td>
					</tr>





				




							
				</table>
			
		</fieldset>
		<fieldset>
			<legend><h3>Programmer vos actionneur</h3></legend>
				<table>
					<tr>
						<td>
							<label for="heure">Heure: </label>
						<td>
						<td>
							<select name="choix_heure">
							<option value="choix1">1</option>
							<option value="choix2">2</option>
							<option value="choix3">3</option>
							<option value="choix4">4</option>
							<option value="choix5">5</option>
							<option value="choix6">6</option>
							<option value="choix7">7</option>
							<option value="choix8">8</option>
							<option value="choix9">9</option>
							<option value="choix10">10</option>
							<option value="choix11">11</option>
							<option value="choix12">12</option>
							<option value="choix13">13</option>
							<option value="choix14">14</option>
							<option value="choix15">15</option>
							<option value="choix16">16</option>
							<option value="choix17">17</option>
							<option value="choix18">18</option>
							<option value="choix19">19</option>
							<option value="choix20">20</option>
							<option value="choix21">21</option>
							<option value="choix22">22</option>
							<option value="choix23">23</option>
							</select>
						</td>

						<td>
							<select name="choix_minute">
							<option value="choix1">0</option>
							<option value="choix2">5</option>
							<option value="choix3">10</option>	
							<option value="choix4">15</option>
							<option value="choix5">20</option>
							<option value="choix6">25</option>
							<option value="choix7">30</option>
							<option value="choix8">35</option>
							<option value="choix9">40</option>
							<option value="choix10">45</option>
							<option value="choix11">50</option>
							<option value="choix12">55</option>
							</select>


					<tr>
						<td>
							<label for="etage">Niveau: </label>
						</td>
						<td>
							<select name="choix_niveau">
							<option value="choix1">sous-sol</option>
							<option value="choix2">rez-de-chaussée</option>
							<option value="choix3">étage 1</option>
							<option value="choix4">étage 2</option>
							<option value="choix5">grenier</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>
							<label for="piece">Pièce:</label>
						</td>

						<td>
							<select name="choix_pièce">
							<option value="choix1">salle de bain</option>
							<option value="choix2">toilette</option>
							<option value="choix3">cuisine</option>
							<option value="choix4">chambre 1</option>
							<option value="choix5">chambre 2</option>
							<option value="choix2">chambre3</option>
							<option value="choix3">salon</option>
							<option value="choix4">jardin</option>
							<option value="choix5">terrasse</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="température_prog">Température:</label>
						</td>
						<td>
							<input type="int" placeholder="température en degrés" name="temperature">

						</td>
					</tr>

				</table>





							    

        
    </div>
    
    <!-- Le pied de page -->
    <div align=center>
    <footer>
        <ul>
                <li><a href="page4.html">FAQ</a></li>
                <li><a href="page5.html">Aide</a></li>
                <li><a href="page6.html">Nous contacter</a></li>
        </ul>
    </footer> 
    </div>   


    
    
    </body>
</html>