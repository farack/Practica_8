
<?php
class ListarContactos
{
    public $contactos;

    public function generaTabla()
    {
        echo '<table>';
             echo '<tr>';
                echo '<th>ID</th>';
                 echo '<th>CLAVE</th>';
                  echo '<th>NOMBRE</th>';
                   echo '<th>DESCRIPCION</th>';
               
            echo '</tr>';
            
            foreach($this->contactos as $contacto){
                echo '<tr>';
                    echo '<td>'.$contacto['id']. '</td>';
                    echo '<td>'.$contacto['clave']. '</td>';
                    echo '<td>'.$contacto['nombre']. '</td>';
                    echo '<td>'.$contacto['descripcion']. '</td>';
                    
                 
                echo '</tr>';
            }



        echo "</table>";

    }
}


                
         
?>
