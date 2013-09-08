


<?php
     ini_set('disp1ay_errors', true);
     $a = array("foo" => "bar");
     
     error_reporting(E_ERROR);
     echo $a["foo"];
     echo $a[foo]; 			// Obs inga fnuttar runt foo på denna rad
     echo "<hr />";
     

     //error_reporting(E_ALL);           // Strikt: Rapotering All  error     <<<<<<<<<<<<<<<<<
     
     echo $a["foo"];
     echo $a[foo]; 			// Obs inga Fnuttar runt -Foo på denna rad



?>