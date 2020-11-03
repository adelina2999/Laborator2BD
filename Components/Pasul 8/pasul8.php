<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Ce este iubirea?</title>
    <link rel="icon" type="image/png" href="./Components/heart.webp">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<header id="main">
    <div class="topnav">
		<a class="active" href="../Pasul 7/pasul7.html" target="_blank">Pagina Principală</a>
		<a href="../Pasul 1/pasul1.html" target="_blank">Pasul 1</a>
		<a href="../Pasul 2/pasul2.html" target="_blank">Pasul 2</a>
		<a href="../Pasul 3/pasul3.html" target="_blank">Pasul 3</a>
		<a href="../Pasul 4/pasul4.html" target="_blank">Pasul 4</a>
		<a href="../Pasul 5/pasul5.html" target="_blank">Pasul 5</a>
        <a href="../Pasul 6/pasul6.html" target="_blank">Pasul 6</a>
    </div>
</header>

<!-- Adaugare -->
<div>
    <h2>Adaugare autor</h2>
    <form action="?" method="POST">
        Nume: <input type="text" name="nume"><br/>
        Prenume: <input type="text" name="prenume"><br/>
        Id Tip Autor: <input type="text" name="id_tip_autor"><br/>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>
<!-- Editare -->
<div>
    <h2>Editare autor</h2>
    <form action="?" method="POST">
        Id Autor: <input type="text" name="id_autor"><br/>
        Nume: <input type="text" name="nume"><br/>
        Prenume: <input type="text" name="prenume"><br/>
        Id Tip Autor: <input type="text" name="id_tip_autor"><br/>
        <input type="submit" name="edit" value="Submit">
    </form>
</div>
<!-- Stergere -->
<div>
    <h2>Stergere autor</h2>
    <form action="?" method="POST">
        Id Autor: <input type="text" name="id_autor"><br/>
        <input type="submit" name="delete" value="Submit">
    </form>
</div>
<section>
    <article>
        <header>
            <h2 class="title">"Ce este iubirea?"</h2>
            <p class="subTitle">Tataru Adelina</p>
        </header>
        <div class="main">  

             <?php
                define('HOST', 'localhost');
                define('USER', 'root');
                define('PASSWORD', '');
                define('NAME_BD', 'dragostea');
                
                $dbcon = mysqli_connect(HOST, USER, PASSWORD, NAME_BD);
                
                // Adaugarea
                 unui autor
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

                $sqlget="SELECT * FROM autor";
                $sqldata= mysqli_query($dbcon, $sqlget) or die ("erorr getting");
                echo "<table class='tg'>";
                echo "<tr><th class='tg-yw4l'>ID autor</th>
                	  <th class='tg-yw4l'>Numele autorului</th>
                	  <th class='tg-yw4l'>Prenumele autorului</th>
                	  <th class='tg-yw4l'>ID tip autor</th></tr>";
                while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
                	echo "<tr><td class='tg-yw4l'>";
                	echo $row['id_autor'];
                	echo "</td><td class='tg-yw4l'>";
                	echo $row['nume'];
                	echo "</td><td class='tg-yw4l'>";
                	echo $row['prenume'];
                	echo "</td><td class='tg-yw4l'>";
                	echo $row['id_tip_autor'];
                	echo "</td></tr>";
                }
                echo"</table>";
                echo"<br>";
                
                $sqlget="SELECT * FROM tip_de_dragoste";
                $sqldata= mysqli_query($dbcon, $sqlget) or die ("erorr getting");
                echo "<table class='tg'>";
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
                echo "<table class='tg'>";
                echo "<tr><th>ID tip autor</th>
                    <th>Tipul autorului</th></tr>";
                while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
                	echo "<tr><td>";
                	echo $row['id_tip_autor'];
                	echo "</td><td>";
                	echo $row['tip'];
                	echo "</td><tr>";
                }
                echo"</table>";
                echo"<br>";
                
                $sqlget="SELECT * FROM citat";
                $sqldata= mysqli_query($dbcon, $sqlget) or die ("erorr getting");
                echo "<table class='tg'>";
                echo "<tr><th>ID citat</th>
                    <th>Citat</th>
                    <th>Timpul crearii</th>
                    <th>Id tip</th>
                    <th>Id autor</th>";
                while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
                	echo "<tr><td>";
                	echo $row['id_citat'];
                    echo "</td><td>";
                    echo $row['citat'];
                    echo "</td><td>";
                    echo $row['timp_creare'];
                    echo "</td><td>";
                    echo $row['id_tip'];
                	echo "</td><td>";
                	echo $row['id_autor'];
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
    <div class="footer">
        <p>Copyright University Tehnical of Moldova,
            Applied Informatics 191, Tataru Adelina
        </p>
    </div>
</footer>
</body>
</html>
 
