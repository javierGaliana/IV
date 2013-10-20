<!DOCTYPE HTML>
<html>
   <?php
      session_start();
      if(!empty($_SESSION["usuario"])){
         session_destroy();
         echo"Se ha desconectado correctamente.<br />";
         echo " <script type='text/javascript'>
                   setTimeout(window.history.back(-1),3000);
                </script> ";
      }
   ?> 


</html>
