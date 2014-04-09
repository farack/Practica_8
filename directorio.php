<?php
require_once('contacto.php');
require_once('listarContactos.php');
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    <title>Ejemplo de PHP y MySQL</title>
    <meta charset="UTF-8"> 
    </head>
    <body>
        <h1>Mostrar los elementos</h1>
        <?php
            $modelo = new Contacto();
            $contactos = $modelo->encontrarTodos();
            $listar = new ListarContactos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
        ?>
      
    
    </from>
      
<form action="" method="post">
        <p> id :</br><input type="text" name="clave" ></input></p>
        <p> id :</br><input type="text" name="nombre" ></input></p>
        <p> id :</br><input type="text" name="descripcion" ></input></p>
   
        <input type="submit" value="Inicio" name="enviar"></input>
      </from>
       <?php
 if (isset($_REQUEST['enviar'])) 
{ 
 echo "se pincho en el boton"; 


        
             $products = new Contacto();
                  
           $products->clave=$_POST["clave"];
           $products->nombre=$_POST["nombre"];
           $products->descripcion=$_POST["descripcion"];
           $products->nuevo();
             
       
}
 ?>

    </body>
</html>
