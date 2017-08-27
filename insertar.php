<html>
    <head>

    </head>
    
    <body >
           <?php
            $SQLInsert = "insert into datos(dni,nombre_per) Values('".$_POST['display']."','".$_POST['otro']."')";
            $sqlcon=mysqli_connect ("localhost","root","","prueba");
           
            if (!$sqlcon) {
             die("Connection failed: " . mysqli_connect_error());
            }
            if (mysqli_query($sqlcon, $SQLInsert)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $SQLInsert . "<br>" . mysqli_error($sqlcon);
            }
            
            mysqli_close($sqlcon);

            ?>
           <h2>la info ha sido guardada</h2>
           <p>haga click<a href="http://localhost/consulta.php">aqui</a> aqui para ver la info </p>

    </body>
</html>