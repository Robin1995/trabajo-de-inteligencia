<html>
    <head>

    </head>
    
    <body >
           <?php
            //$SQLInsert = "insert into datos(dni,nombre_per) Values('".$_POST['display']."','".$_POST['otro']."')";
            $sqlcon=mysqli_connect ("localhost","root","","prueba");
           
                         if (!$sqlcon) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT dni, nombre_per FROM datos";
                    $result = mysqli_query($sqlcon, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "dni: " . $row["dni"]. " - Nombre: " . $row["nombre_per"]. "<br>";
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($sqlcon);
                    

            ?>
          

    </body>
</html>