 <?php
      if (empty($_GET['name'])) 
          {
	    $name = 'du ok�nde';
	  } 
      else
   	  {
	    $name = filter_input( 'INPUT_GET', 'name', FILTER_SANITIZE_SPECIAL_CHARS);
            //$name = filter_input( INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
	  }


// H�r b�rjar output
header("Content-type: text/html; charset=utf-8");
?>

<!DOCTYPE html>
  <html lang="sv">
      <head>
         <meta charset="utf-8" />
         <title>Hello2</title>
	 <style>
	     body { font-family: sans-serif; }
	 </style>
      </head>
      
      <body>
         <h1>Hello2</h1>
         <?php
             echo "<p>Hej $name</p>\n";
         ?>
      </body>
 </html>