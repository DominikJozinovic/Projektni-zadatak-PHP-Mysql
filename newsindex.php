<?php 

	

	
	# Database connection
	include ("dbconn.php");

    if(isset($_GET['novo'])) { $novo  = (int)$_GET['novo']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($novo)) { $novo = 1; }
	

	
print '

<!DOCTYPE html>
<html>
 <head>
   
 <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet"  href="style.css">
  
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <title>⚔️GLADIATORGYM⚔️</title>
 </head>
 
<body>
 
  <nav>';
   

 
  
  include("menu.php");
        
  print '
</nav>

<script src="app.js"></script>
<main>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">';



if (!isset($novo) || $novo == 1) { include("news/news3.php");}

# News
else if ($novo == 2) { include("news/news1.php"); }

# Contact
else if ($novo == 3) { include("news/news2.php"); }

# About us
else if ($novo == 4) { include("news/news4.php"); }

# Register
else if ($novo == 5) { include("news/news5.php"); }



print '
      <footer class="footer-distributed">
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
        <div class="footer-right">
  
          <a href="https://github.com/DominikJozinovic/-Projektni-zadatak-HTML-CSS"><img  src="gallery/Octocat.png" title="Github" alt="Github"/></a>
          
  
        </div>
  
        <div class="footer-left">';
     
        include("footer.php");

        print '

          <p>Gladiator gym &copy; 2021 Dominik Jozinović </p>
        </div>
  
      </footer>
    



     

      </body>
     
    
</html>';
?>
