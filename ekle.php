<html>
   <head>
   <meta HTTP-EQUIV="Content-type" VALUE="text/html; charset=utf-8" />
      <title>Add to Database</title>
      <link rel = "stylesheet" type = "text/css" href = "style.css">
   </head>
   
   <body>
      <div id = "main">
         <form action = "" method = "post">
            <label>ad :</label>
            <input type = "text" name = "a" id = "a" /><br /><br />
			<label>adres :</label>
            <input type = "text" name = "b" id = "b" /><br /><br />
			<label>resim :</label>
            <input type = "text" name = "c" id = "c" /><br /><br />
			<label>telefon :</label>
            <input type = "text" name = "d" id = "d" /><br /><br />
			<label>aciklama :</label>
            <textarea name = "e" id = "e" ></textarea><br /><br />
			<label>google map :</label>
            <input type = "text" name = "f" id = "f" /><br /><br />
            <br /><br />
            <input type = "submit" value ="ekle" name = "submit"/>
            <br />
         </form>
      </div>
      
      <?php
	  header('Content-type: text/html; charset=utf-8');
         if(isset($_POST["submit"])){
		 include 'a.php';
            
            $sql = "INSERT INTO izmir(ad,aciklama,resim,telefon,adres,map)VALUES ('".$_POST["a"]."','".$_POST["e"]."','".$_POST["c"]."',
			'".$_POST["d"]."','".$_POST["b"]."','".$_POST["f"]."')";

            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
      ?>
   </body>
</html>