<!DOCTYPE html>
<?php
    // Start the session
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo $_SESSION["NAME"];
            
            // remove all session variables
            session_unset(); 

            // destroy the session 
            session_destroy();
        ?>
    </body>
</html>
