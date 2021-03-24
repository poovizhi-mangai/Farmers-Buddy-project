<?php
   session_start();

   session_unset();

   if(session_destroy()) {
     header("Location: index.php");
   }
   else {
       echo "problem in logging out";
   }

?>