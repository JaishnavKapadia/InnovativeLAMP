<html>
<?php 
 session_start(); 
 $counter_file = "count.txt"; 
 
/* Read from file */ 
 $f = fopen($counter_file, "r"); 
 $count = fread($f, filesize($counter_file)); 
 fclose($f); 

/* Set Session and add one more visit  */ 
 if(!isset($_SESSION['visitedBefore'])){ 
 $_SESSION['visitedBefore'] = TRUE; 
 $count++; 
 $f = fopen($counter_file, "w"); 
 fwrite($f, $count); 
 fclose($f); 
 } 
 
 echo "People Viewed :".$count; 
?> 
<br>
<br>
</html>