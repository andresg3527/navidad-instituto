<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style_seats.css">
</head>
<body>

<?php
$servername = "localhost";
$database = "registros";
$username = "root";
$password = "290197amgc";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
echo 'Connection error: ' . mysqli_connect_error();
}

?>

<div class="movie-container">
  <div class="container">
    <div class="front">
      <div class="screen"></div>
      <div class = "choir"> 
        <div class="row">
          <div class="c"></div>
          <div class="c"></div>
          <div class="c"></div>
          <div class="c"></div>
          <div class="c"></div>
        </div>
        <div class="row">
          <div class="c"></div>
          <div class="c"></div>
          <div class="c"></div>
          <div class="c"></div>
          <div class="c"></div>
        </div>
      </div>
    </div>
    <div class = "seats">
      
<?php
$db = "SELECT * FROM ASIENTOS";
$db_res = $conn->query($db);
///////////////////////
/* GOOD WORKING FINE
  while($row = $db_res->fetch_assoc()) {
    $content = $row['id'];
    if($row['disponible'] == FALSE){
      echo "<div class=\"free\">$content</div>";
    }
    else{
        echo "<div class=\"occup\">$content</div>";
    }
    }

*/
 while($row = $db_res->fetch_assoc()) {
    $content = $row['id'];
    if($row['disponible'] == FALSE){
      echo "<button class=\"occup\">$content</button>";
    }
    else{
        echo "<button class=\"free\">$content</button>";
    }
    }

mysqli_close($conn);

?>
</div>



</div>
 <div class = "formulario">
    <form action="POST">
      <input type="text" name="fname" id="fname" placeholder="Primer Nombre">
      <input type="text" name="lname" id="lname" placeholder="Apellido">
      <input type="datalist" name="asiento" id="asiento" placeholder="Asiento">
      <input type="text" name="funcion" id="funcion" disabled placeholder="Funcion">
      <input type="submit" name="send" id="btn_send" placeholder="Registrar">
    </form>
  </div>
</div>

<script src="effects.js"></script>
</body>
</html>