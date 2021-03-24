<html>
   <head>
      <title>Taller 1 </title>
   </head>
    
     <body>
        <h2>Punto Numero 5 y 6</h2>

          <h1>
            <?php
               $texto= "Holaa Profe...Que tal todo??";
               $numero= 1416;
               $boolean= true;
               $double= 3.14;
               $fecha= "2003-05-28";

               echo "Esta es una variable de texto ".$texto."<br>";
               echo "Esta es una variable numerica ".$numero."<br>";
               echo "Esta es una variable de tipo booleana ".$boolean."<br>";
               echo "Esta es una variable de tipo double ".$double."<br>";
               echo "Esta es una variable de tipo date ".$fecha."<br>";
            ?>
          </h1> 
          <?php
              echo "<h2>Punto numero 7 y 8</h2>";
             $valor1=4.8;
             $valor2=5.3;
             $resultado=$valor1*$valor2;
              echo "<h2>La Multiplicaion del valor 1 y valor 2 $resultado</h2>";
          ?>

          <?php
             $Array= [
                "Camilo",
                 "Andres",
                 "Carla",
                 "Cesar"
             ];
               $numeroArray= count($Array);
             for ($i=0; $i < $numeroArray; $i++) { 
                echo "Esta es la posicion ".$i." y contiene ".$Array[$i]."<br>";
             }
          ?>
    </body>
</html>