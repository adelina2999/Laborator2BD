<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="UTF-8">
  <title>Ce este iubirea?</title>
  <link rel="icon" type="image/png" href="./Components/heart.webp">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="pasul8.css">
  </head>
  <body class="w3-content w3-border-left w3-border-right">
    <nav class="w3-sidebar w3-light-grey w3-collapse w3-top" style="z-index:3;width:260px">
      <!-- Adaugare -->
      <form action="?" method="POST" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
      <h2 class="w3-center">Adaugare</h2>
      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="nume" type="text" placeholder="Nume">
          </div>
        </div>

      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="prenume" type="text" placeholder="Prenume">
          </div>
      </div>

      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="id_tip_autor" type="text" placeholder="ID tip autor">
          </div>
      </div>

<p class="w3-center">
<input type="submit" name="submit" class="w3-button w3-section w3-blue w3-ripple" value="Submit">
</p>
</form>
<!-- Editare -->
<form action="?" method="POST" class="w3-container w3-card-4 w3-light-grey w3-text-yellow w3-margin">
<h2 class="w3-center">Editare</h2>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="id_autor" type="text" placeholder="ID autor">
    </div>
</div>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="nume" type="text" placeholder="Nume">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="prenume" type="text" placeholder="Prenume">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="id_tip_autor" type="text" placeholder="ID tip autor">
    </div>
</div>

<p class="w3-center">
<input type="submit" name="edit" class="w3-button w3-section w3-yellow w3-ripple" value="Edit">
</p>
</form>
<!-- Stergere -->
<form action="?" method="POST" class="w3-container w3-card-4 w3-light-grey w3-text-red w3-margin">
<h2 class="w3-center">Stergere</h2>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="id_autor" type="text" placeholder="ID autor">
    </div>
</div>

<p class="w3-center">
<input type="submit" name="delete" class="w3-button w3-section w3-red w3-ripple" value="Sterge">
</p>
</form>
</nav>

<header id="main">
  <div class="w3-main w3-white" style="margin-left:260px">
    <ul>
      <li><a href="../Pasul 7/pasul7.html" target="_blank">Pagina Principală</a>
  		<li><a href="../Pasul 1/pasul1.html" target="_blank">Pasul 1</a></li>
  		<li><a href="../Pasul 2/pasul2.html" target="_blank">Pasul 2</a></li>
  		<li><a href="../Pasul 3/pasul3.html" target="_blank">Pasul 3</a></li>
  		<li><a href="../Pasul 4/pasul4.html" target="_blank">Pasul 4</a></li>
  		<li><a href="../Pasul 5/pasul5.html" target="_blank">Pasul 5</a></li>
      <li><a href="../Pasul 6/pasul6.html" target="_blank">Pasul 6</a></li>
    </ul>
  </header>

  <div class="w3-container" class="w3-main w3-white" style="margin-left:260px">
    <h2 class="w3-text-green">Imagini</h2>
    <div class="w3-display-container mySlides">
    <img src="../What-Is-Love.jpg" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>What is LOVE?</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="../database.png" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Baza de date</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="../php.png" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>PHP</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="../server.jpg" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Server</p>
      </div>
    </div>
  </div>
  <div class="w3-row-padding w3-section">
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../What-Is-Love.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)" title="What is love?">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../database.png" style="width:100%;cursor:pointer" onclick="currentDiv(2)" title="Baza de date">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../php.png" style="width:100%;cursor:pointer" onclick="currentDiv(3)" title="PHP">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../server.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(4)" title="Server">
    </div>
  </div>

<section class="w3-container">
  <article class="w3-main w3-white" style="margin-left:260px">
    <div class="main">  
      <?php
        define('HOST', 'localhost');
        define('USER', 'root');
        define('PASSWORD', '');
        define('NAME_BD', 'dragostea');
        $dbcon = mysqli_connect(HOST, USER, PASSWORD, NAME_BD);
        // Adaugarea unui autor
        if(isset($_POST["submit"])){
          $nume = $_POST['nume'];
          $prenume = $_POST['prenume'];
          $id_tip_autor = $_POST['id_tip_autor'];
          if($query = mysqli_query($dbcon,"INSERT INTO autor (id_autor, nume, prenume, id_tip_autor)
            VALUES ('', '".$nume."', '".$prenume."', '".$id_tip_autor."')")){
              echo "A fost adaugat";
          } else {
            echo "Eroare: " . mysqli_error($dbcon);
          }
        }
        //Editarea unui autor
        if(isset($_POST["edit"])){
          $id_autor = $_POST['id_autor'];
          $nume = $_POST['nume'];
          $prenume = $_POST['prenume'];
          $id_tip_autor = $_POST['id_tip_autor'];
          if($query = mysqli_query($dbcon,"UPDATE autor SET nume= '".$nume."', prenume = '".$prenume."', id_tip_autor = '".$id_tip_autor."' WHERE id_autor = $id_autor")){
            echo "A fost editat";
          } else {
            echo "Eroare: " . mysqli_error($dbcon);
          }
        }
        //Stergerea unui autor
        if(isset($_POST["delete"])){
          $id_autor = $_POST['id_autor'];
          if($query = mysqli_query($dbcon,"DELETE FROM autor WHERE id_autor = $id_autor")){
            echo "A fost sters";
          } else {
            echo "Eroare:  " . mysqli_error($dbcon);
          }
        }
        // INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID
        $sqlget="SELECT
        autor.id_autor,
          autor.nume,
          autor.prenume,
          tip_autor.tip
      FROM
          autor
      LEFT JOIN tip_autor ON autor.id_tip_autor = tip_autor.id_tip_autor";
        $sqldata= mysqli_query($dbcon, $sqlget) or die ("erorr getting");
        echo "<table>";
        echo "<tr><th>ID autor</th>
        	  <th>Numele autorului</th>
        	  <th>Prenumele autorului</th>
        	  <th>Tip autor</th></tr>";
        while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
        	echo "<tr><td>";
        	echo $row['id_autor'];
        	echo "</td><td>";
        	echo $row['nume'];
        	echo "</td><td>";
        	echo $row['prenume'];
        	echo "</td><td>";
        	echo $row['tip'];
        	echo "</td></tr>";
        }
        echo"</table>";
        echo"<br>";
        $sqlget="SELECT * FROM tip_de_dragoste";
        $sqldata= mysqli_query($dbcon, $sqlget) or die ("erorr getting");
        echo "<table>";
        echo "<tr><th>ID tip</th>
        	<th>Tip de dragoste</th>";
        while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
        	echo "<tr><td>";
        	echo $row['id_tip'];
        	echo "</td><td>";
        	echo $row['tip'];
        	echo "</td><td>";
        }
        echo"</table>";
        echo"<br>";
        $sqlget="SELECT * FROM tip_autor";
        $sqldata= mysqli_query($dbcon, $sqlget) or die ("erorr getting");
        echo "<table>";
        echo "<tr><th>ID tip autor</th>
          <th>Tipul autorului</th></tr>";
        while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
        	echo "<tr><td>";
        	echo $row['id_tip_autor'];
        	echo "</td><td>";
        	echo $row['tip'];
        	echo "</td></tr>";
        }
        echo"</table>";
        echo"<br>";
        $sqlget="SELECT
        citat.id_citat,
          citat.citat,
          citat.timp_creare,
          tip_de_dragoste.tip,
          concat(autor.prenume, ' ', autor.nume) as nume_autor
      FROM citat
      LEFT JOIN tip_de_dragoste ON citat.id_tip = tip_de_dragoste.id_tip
      LEFT JOIN autor ON citat.id_autor = autor.id_autor";
        $sqldata= mysqli_query($dbcon, $sqlget) or die ("erorr getting");
        echo "<table>";
        echo "<tr><th>ID citat</th>
            <th>Citat</th>
            <th>Timpul crearii</th>
            <th>Tip de dragoste</th>
            <th>Autor</th></tr>";
        while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
        	echo "<tr><td>";
        	echo $row['id_citat'];
          echo "</td><td>";
          echo $row['citat'];
          echo "</td><td>";
          echo $row['timp_creare'];
          echo "</td><td>";
          echo $row['tip'];
        	echo "</td><td>";
        	echo $row['nume_autor'];
        	echo "</td></tr>";
        }
        echo"</table>";
        echo"<br>";
        ?>
      </p>
    </div>
  </article>
</section>
<footer>
  <div class="w3-main w3-white" style="margin-left:260px">
    <p>Copyright University Tehnical of Moldova,
        Applied Informatics 191, Tataru Adelina
    </p>
  </div>
</footer>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>
</body>
</html>
