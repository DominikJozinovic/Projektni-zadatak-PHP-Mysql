<?php
 print '

     <div class="logo">
          <h4 ><a href="index.php?menu=1"style="color: inherit;">⚔️GLADIATORgym⚔️</a></h4>
        </div>
        <ul class="nav-links" >
          <li>
            <a href="index.php?menu=2">💪Treniraj kao gladiator</a>
          </li>
           <li>
             <a href="index.php?menu=3">📰Novosti</a>
            </li>
           <li>
             <a href="index.php?menu=4">☎️Kontakt</a>
            </li>
            <li>
              <a href="index.php?menu=5">💡O nama</a>
            </li>
           <li>
             <a href="index.php?menu=6">🖼️Galerija teretane</a>
            </li>
           <li>
             <a href="index.php?menu=7">👑Arena</a>
            </li>';
            if (!isset($_SESSION['users']['valid']) || $_SESSION['users']['valid'] == 'false') {
              print'<li style="float: right; margin-right: 40px;"><a href="index.php?menu=8">Login</a></li>';
          }else if ($_SESSION['users']['valid'] == 'true') {
              print'<li style="float: right; margin-right: 40px;"><a href="logout.php">Log out</a></li>
              <li style="float: right; margin-right: 40px;"><a class="user"  style="cursor:default;">'.$_SESSION['users']['firstname'].'</a></li>';
          }
          print ' 
        </ul>
        
        <div class="burgermenu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
        </div>';






?>