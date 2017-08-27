<html>
    <head>

    </head>
    
    <body >
           <?php
            
            $sqlcon=mysqli_connect ("localhost","root","","prueba");
           
                         if (!$sqlcon) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "DELETE FROM datos where dni = 3424";           

                    if (mysqli_query($sqlcon, $sql)) {
                        echo "fue borrado exitosamente";
                    } else {
                        echo "Error borrando datos: " . mysqli_error($conn);
                    }

                    mysqli_close($sqlcon);
            ?>
          

    </body>
</html>