<?php 

/* basename returnerer path ved hjælp af $_SERVER['PHP_SELF'] som fortæller stien/path til den aktuelle side.

Given a string containing the path to a file or directory, this function will return the trailing name component of path. 

Vi bruger i dette tilfælde $_SERVER['PHP_SELF']:
$_SERVER[] is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server. 
*/

$curpage = basename($_SERVER['PHP_SELF']); 
?>

      
      <nav>
       
        <!-- IF statement bruges til at finde ud af hvilken side, der er aktiv. 
        Er curpage lig med 'home.php' skal den echo 'class="active". 
        == betyder lig med!  -->
          
        <a href="home.php" <?php if ($curpage == 'home.php') { echo 'class="active"'; } ?>>home</a>
        <a href="about.php" <?php if ($curpage == 'about.php') { echo 'class="active"'; } ?>>about</a>
        <a href="projects.php" <?php if ($curpage == 'projects.php') { echo 'class="active"'; } ?>>projects</a>
        <a href="contact.php" <?php if ($curpage == 'contact.php') { echo 'class="active"'; } ?>>contact</a>

   </nav>