<?php




print '
      
      

        <div class= "containerc">
          <div class= "cardc">
          <div class="inner-box" id="cardc">
            <div class="card-front">
            <h2>Dobrodošli natrag!</h2>
            <form>
              <input type= "email" class="input-box" placeholder="Adresa e-pošte" required>
              <input type= "password" class="input-box" placeholder="Lozinka" required>
              <button type="submit" class="submit-btn">Prijavi se</button>
              <input type="checkbox"><span> Zapamti me</span>
            </form>
            <button type="button" class="btnc" onclick="openRegister()">Želim postati Gladiator</button>
            <a href="">Zaboravljena lozinka</a>
            </div>
            <div class="card-back">
              <h2>Registracija</h2>
            <form>
              <input type= "text" class="input-box" placeholder="Vaše ime i prezime" required>
              <input type= "email" class="input-box" placeholder="Adresa e-pošte" required>
              <input type= "search" class="input-box" placeholder="Država" required>
              <input type= "text" class="input-box" placeholder="Adresa stanovanja" required>
              <input type= "password" class="input-box" placeholder="Lozinka" required>
              <button type="submit" class="submit-btn">Registriraj se</button>
              
              
             
            
            </form>
            <button type="button" class="btnc" onclick="openLogin()">Prijavi se s postojećim računom</button>
            
            </div>
          </div>
          </div>

          <script>
            var card = document.getElementById("cardc");

            function openRegister(){
              cardc.style.transform = "rotateY(-180deg)";

            }

            function openLogin(){
              cardc.style.transform = "rotateY(0deg)";
              
            }

          </script>




        </div>';
        
      
    
        ?>
       
        
      
     