<?php include_once 'includes/templates/header.php';?>

    <section class="seccion contenedor">
       <h2>Calendario de eventos</h2>
      
        <?php
        
        try {
            require_once('includes/funciones/bd_conexion.php'); // crear la conexion
            $sql = "SELECT * FROM eventos"; // escribir la consulta
            $resultado = $conn->query($sql); // realizar la consulta
        }catch (\Exception $e){
            echo $e->getMessage();
        }     
        
        
        ?>

        <div class="calendario">
            <?php    // fetch_asoc es una funcion que imprime los resultados           
               while($eventos = $resultado->fetch_assoc()) { ?> 
                <?php
                
                    // echo $eventos['nombre_evento'];
                    // echo '<br>';

                   
                
                ?>

                <pre><?php var_dump($eventos);?></pre>
             <?php  } ?>

            

        </div>

         

        <?php        
            $conn->close();  //por ultimo siempre cerramos la conexion a la base      
        ?>



    </section>
    
    <?php include_once 'includes/templates/footer.php';?>