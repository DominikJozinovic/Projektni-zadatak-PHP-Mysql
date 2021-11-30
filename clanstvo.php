<?php




include("registration.js");
      
  
    print '
        <div class= "containerc">
          <div class= "cardc">
          <div class="inner-box" id="cardc">
            <div class="card-front">
            <h2>Dobrodošli natrag!</h2>
         
            <form action=""  id="login" name="login"  formmethod="POST">
            <input type="hidden" id="_action_" name="_action_" value="TRUE">
              <input type= "email" class="input-box" placeholder="Adresa e-pošte" required>
              <input type= "password" class="input-box" placeholder="Lozinka" required>
              <button type="submit" class="submit-btn" name="login">Prijavi se</button>
              <input type="checkbox"><span> Zapamti me</span>
              <button type="button" class="btnc" onclick="openRegister()"  >Želim postati Gladiator</button>';
              include ("login.php");
              print '
            </form>
   
            <a href="">Zaboravljena lozinka</a>
            </div>
            <div class="card-back">
              <h2>Registracija</h2>
            

           
            <form action=""  method="POST">
           
              <input type= "text" class="input-box" id="firstname" name="firstname" placeholder="Vaše ime" required>
              <input type= "text" class="input-box" id="lastname" name="lastname" placeholder="Vaše prezime" required>
              <input type= "email" class="input-box" id="email" name="email" placeholder="Adresa e-pošte" required>
              <select name="country" class="input-box" id="country">
				<option value=""class="input-box">Odaberite državu stanovanja</option>';
				#Select all countries from database webprog, table countries
				$query  = "SELECT * FROM countries";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option class="input-box" value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
				}
			print '
              <input type= "text" class="input-box" placeholder="Adresa stanovanja" required>
              <input type= "password" class="input-box" name="password" placeholder="Lozinka" required>
              <button type="submit" class="submit-btn" name="submit">Registriraj se</button>
              
          
              ';
              include ("registration.php");
              print '
            </form>
            <button type="button" class="btnc" onclick="openLogin()" >Prijavi se s postojećim računom</button>
            
            </div>
            </div>
         
         
            </div>
 
            </div>

          
      



        
        </div>';
    
        ?>
       
        
      
     