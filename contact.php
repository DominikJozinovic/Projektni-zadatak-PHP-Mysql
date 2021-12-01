<?php

print '
      


<main>
     
  <div class="container">
		<div class="contact-box">
			<div class="left">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2777.8133672584645!2d16.013225815759938!3d45.875043413955645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d9b236649f79%3A0xd24a661fcb22b410!2s%C5%A0tefanovec%20ul.%2C%2010000%2C%20Zagreb!5e0!3m2!1shr!2shr!4v1637703141976!5m2!1shr!2shr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
			<div class="right">
				<h2>Kontaktirajte nas</h2>
				<form method="POST">
				<input type="text" class="field" id="fname" placeholder="Ime i prezime" required>
				<input type="email" class="field" id="email" placeholder="Email" required>
				<input type="number" class="field" placeholder="Broj mobitela/telefona" required>
				<select name="country" class="field" id="country">
				<option value=""class="field">Odaberite državu stanovanja</option>';
				
				$query  = "SELECT * FROM countries";
				$result = @mysqli_query($db, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option class="field" value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
				}
			print '
				<textarea id="sadrzaj" placeholder="Poruka" class="field" required></textarea>
				<button class="btn" name="submit" >Pošalji</button>
				</form> 
			</div>
		</div>
	</div>
        
        </div>
        </main>';

    
    
        ?>
      
     
